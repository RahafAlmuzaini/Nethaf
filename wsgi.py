from flask import Flask, request, jsonify, send_file
from keras.models import load_model
import numpy as np
from PIL import Image

app = Flask(__name__)

@app.route('/classify', methods=['POST'])
def classify():
    model = load_model('my_model.h5')
    img_file = request.files.get('image')
    img = Image.open(img_file)
    img = img.resize((180, 180))
    img_array = np.array(img)
    img_array = np.expand_dims(img_array, axis=0)
    img_array = img_array / 255.0

    prediction = model.predict(img_array)
    predicted_class = np.argmax(prediction)
    
    classes = ['Dirty', 'Clean']
    predicted_class_name = classes[predicted_class]

    return jsonify({'class': predicted_class_name})

@app.route('/home', methods=['GET'])
def static_file():
    return send_file('imgClassify.html')

if __name__ == '__main__':
    app.run()