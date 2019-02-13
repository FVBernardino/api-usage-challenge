# API Consumption Challenge

The idea of this challenge is to allow us better evaluate the abilities of developers that apply to job positions, of all levels.  
This repository is an advanced challenge that require API creation and consumption. Do not worry about the complexity, we are going to evaluate your test according to the position level that you are applying.
The language and frameworks that you are going to use to achieve this task are totally at your will, but we require that you justify your choices.  

This test approach architectural concepts of APIs and is also a really good challenge to anyone who wants to improve their own skills related to APIs. For that reason, this test is a really good portfolio to any developers.  


## Instructions to deliver this challenge
1. First of all, fork this repository to your Github account (if you do not have one, create it);
1. Then, implement the project following the instructions bellow, in your own fork;
1. Finally, push all your changes to your fork on Github then send us a pull request;
1. You can take as much time you need to solve this test, but usually it does not take more than 6 hours;


## What do we take in account to evaluate this challenge?
- Good object oriented programming practices;
- Tests, your code is guilty until tests proves otherwhise;
- Commit history, we want to see if you know how to write a good commit story;
- Code organization and readability, remember that other developers are going to read your code;
- Architectural decisions and explanations, this is really important for us, we want to understand WHAT technologies you choose and WHY;
- Your code **must run**, the first thing of all that we are going to do is to try to run your code. So if it has any external dependencies, write a good documentation about how to install and run then. PRO TIP: Docker helps a lot to make sure that your solution is going to run anywhere;
- DO NOT COPY OTHERS DEVELOPERS SOLUTIONS, CREATE YOUR OWN. COPY IS GOING TO CAUSE YOU TO BE INSTANTLY DISQUALIFIED!

## The Problem
A lot of web systems use images, our system is not different at all. And today we have a lot of different screen sizes and the same image needs to be shown in different sizes. We receive a lot of images from different sources and we need to guarantee that these images are always be available in at least four different sizes, so the frontend developers can request images with the best fit sizes. They are:  

- Original
- Small (320x240)
- Medium (384x288)
- Large (640x480)

## What do you need to do?
You need to build an API so the frontend developers can use to retrieve images. Since our developers can only handle RESTful api's your API **must** be Restful.  
It must provide the capability to:
- Retrieve a list of all pictures available;
- Retrieve original picture;
- Retrieve picture at any size specified above.

The images available by your API should be obtained from [Unsplash API](https://unsplash.com/developers). You must always provide the most recent photos from Unplash. Since you are going to use the free developer plan, it have a limitation of 50 requests per hour, so the photos must be updated only in intervals of 30 minutes (but we should be able to request your API at any time we want).


Good luck! Have a fun ;)
