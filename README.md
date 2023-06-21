# Nethaf project
## Contents
1- [Project title.](#1-project-title)

2- [Project description.](#2-project-description)

3- [How to run Nethaf](#3-how-to-run-nethaf)
## 1. Project title
Nethaf: it's an Arabic (نِظَافْ) word and it means the cleanliness. 
## 2. Project description
Nethaf is a web application that helps the community to keep the environment clean as much as possible. The idea of this application puts forward a set of initiatives in which users can participate and get scores for each participation, and they can then exchange these points  to get vouchers and discounts offered by several shops, organizations, educational and health centers. A keras model was employed that was built from scratch (where images of dirty and clean places were collected and the model was trained on them) that classifies the images into clean or dirty. 
## 3. How to run Nethaf

### 3.1 You will need these tools and apps:
- MySQL 
- XAMMP 
### 3.2 Steps for running Nethaf:
1. Install files in  this repository.
3. Make sure that you have installed the [SQL file](https://github.com/Farah-alharastany/Nethaf/blob/main/Nethaf-Database.sql).
4. Open "Netha-Database.sql" using MySQL workbench and execute it.
5. Move the folder that conatains the files of this project into "hotdocs" folder on you computer, it may be like this path: **C:\xampp\htdocs**
6. Open XAMMP Panel Control.
7. Click on **start** button to run Apache module.
8. Open your browser.
9. In the address bar enter: 
**http://localhost/Nethaf/**
### 3.3 To run image classificatiion model:
#### You may need to:
- Install a number of python library such as (Flask, Numpy, Keras).
- Activate **venv environment**.
- Run Flask using CMD.
### 3.4 Steps for running classification model:
1. Open CMD and move to the project directory by entering:
```
cd C:\xampp\htdocs\Nethaf
```
**Note:** the path may be a littil different based on where you have installed the xammp.
3. Run flask by entering:
```
Flask run
```
4. Copy the URL address that appears on CMD after wunning the previous command.
5. Paste the URL address in address bar in your browser.
6. Add this to the end the address:
```
/home
```
The whole adress may seem like this URL address:
```
127.0.0.1:5000/home
```
7. Click enter and the image classification page will be loaded.
# Nethaf
