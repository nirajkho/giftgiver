## TOC Read.me File

## Gift Giving Express by Niraj Khosla / 1803357

------



### Abstract/Description of Context



Gift giving is an art but it can be perfected through the use of technology. In addition to the gift, it is the thought that counts.

Gift giving is a process where ‘Gift Giver(s)’ need to be omnipresent and aware of one another. The perfect gift can show that the ‘Gift Recipient’ is valued and can help boost spirits of both the ‘Gift Recipient’ and the ‘Gift Giver’. 

For this project – ‘Gift List Organiser’, I created a website called ‘Gift Giving Express’ which helps users identify gifts for friends, families and loved ones. 

The website helps in suggesting the apt gift for the occasion and ‘Gift Recipient’ along with providing the 'Gift Giver(s)' with a platform to collaboratively share the cost of a gift. 'Gift Giver(s)'/'Gift Recipient(s)' can create as many lists as they want, for various different occasions. After an individual (i.e. 'Gift Giver' or 'Gift Recipient') creates a list, others can review the gifts on the list, as well as provide their own gift suggestions accordingly. 

This read.me file provides a full technical documentation of the website, through design ideas, build and testing. This file is located on a GitLab repository along with the completed technical work. A Final Report for this project has been uploaded to FASER, containing the 'Project Aims and Objectives', link to the 'Technical Documentation', 'Project Planning' along with the overall 'Conclusions'. Here is a link to the report: [CE301 Final Report - 1803357](CE301 Final Report - 1803357.pdf)

------



### Contents


1. GitLab Repository Structure 

2. How to run the website 

3. How to use the website

4. Design Ideas and Inspirations/Literature Survey

   4.1 - App vs Website

   4.2 - Similar Websites on the Internet

   4.3 - Gift Giving and the Impacts it has on Society

   4.4 - The 4 Factors of Gift Appropriateness

5. Technical Details

   5.1 - Languages Used

   5.2 - IDE, Server and Web Browser

6. Technical Challenges

7. Final Design/Product Developed

   7.1 - HTML

   7.2 - CSS

   7.3 - PHP

   7.4 - Database in phpMyAdmin

   7.5 - Final Product Developed

8. Testing

9. References

------



### Section 1 - GitLab Repository Structure 

This GitLab Repository is structured into five areas:

1. 'gift_giver' : This contains the complete source code needed for the website
2. 'Deliverables and Plan' : It contains the required documents by the CSEE Department i.e. 'Challenge Week' data, Plans using Gantt chart, 'Interim Oral Interview' notes and PPT, Poster and Abstract
3. 'Database' : Contains the SQL file to import the database onto a server via phpMyAdmin
4. 'Old Data' : Contains old files which are no longer needed for running the current version of the website but are useful for debugging any errors that may arise with future changes
5. 'Images' : Contains images needed for this read.me file

![GitStructure](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/GitStructure.png)

------



### Section 2 - How to run the website 

There are three alternative methods to currently run the website:

##### The first method is to run it on your personal machine by using the following steps:

1. First clone the GitLab Repository to your computer

2. Now download the 'XAMPP' server software, according to your OS, from https://www.apachefriends.org/index.html

3. Start the server and using a web browser go to the link 'http://192.168.64.2/phpmyadmin/'

4. Import the 'gift.sql' on to phpMyAdmin, this will create the database needed for the website. (Note: The file is located in the 'Database' folder in the 'GitLab Repository clone')

5. Next on the 'XAMPP' GUI, click 'volumes' --> 'mount' --> 'explore' to reach the 'htdocs' folder

6. Copy the 'gift_giver' folder from the 'GitLab Repository clone' to the 'htdocs' folder 

7. Open the 'connect.php' file stored in the  'gift_giver' folder which you have previously copied to 'htdocs' in Step 6

8. Edit Line 2 of 'connect.php' file with your machines login details, to allow the website to communicate with the database

9. Using a web browser, go to the link 'http://192.168.64.2/gift_giver/

10. Now you will be able to use the website

    

##### The second method is to access it via a web browser on a physical University machine, using the following steps:

1. Log on to the University machine with your University Credentials (Note: remember to add '@essex.ac.uk' to the end of your username)

2. Open a web browser and access this link 'http://cseemyweb.essex.ac.uk/~nk18813/gift_giver'

3. Now you will be able to use the website

   

##### The third method is to access the website from a virtual University machine, using the following steps:

1. First use a web browser to access this link https://csee-horizon.essex.ac.uk or download/install [VMware Horizon](https://my.vmware.com/en/web/vmware/downloads/info/slug/desktop_end_user_computing/vmware_horizon_clients/horizon_8), according to your OS
2. Now login with your University Credentials (Note: remember to add '@essex.ac.uk' to the end of your username)
3. Choose the 'CSEE Virtual Windows Lab' PC
4. Open a web browser and access this link 'http://cseemyweb.essex.ac.uk/~nk18813/gift_giver'
5. Now you will be able to use the website

------



### Section 3 - How to use the website

To use the website, please follow the steps below:

1. New users can create a login or existing users can login with their email ID and password

2. Once logged in, a user can perform any of the following actions:

   2.1 Create a list using the ‘Create a List’ page. The user can fill in relevant occasion details via the form and decide if the gift cost is to be shared by a group or will be borne by an individual 'Gift Giver'. A 'ListID' will then be produced and displayed for future tracking and use. (Note: The 'ListID' needs to be shared by the user who created the list with other 'Gift Givers')

   2.2 Suggest a gift using the ‘Gift Suggestion’ page, which requires a verification of the 'Recipient’s Name' and the 'ListID'. Post successful verification, the user's suggestion will be saved to the 'Ideas' table in the database

   2.3 Identify a pre-suggested gift - Status check of existing gift ideas, can be identified by a matching 'Recipient’s Name' and the 'ListID' on the 'Gift' page

   2.4 A user has the option to delete an irrelevant self-suggested gift and participate in another user’s suggested gift

------



### Section 4 - Design Ideas and Inspirations/Literature Survey

#### 4.1 - App vs Website

After looking into both possibilities, I have decided to develop a website. This is due to the following reasons:

- Websites are universal and can be accessed by multiple devices

- Website can be made responsive/adaptive to fit any screen size i.e. desktops as well as mobile devices

- Websites are easier to make and require less development time and maintenance

- Updates to a website are easier to deploy [1]

  

#### 4.2 - Similar Websites on the Internet

The aim of this website is to make it easier for 'Gift Givers' to decide on gifts for a recipient. There are a few websites catering to this demand and I thought it would be useful to research two of the popular websites on the internet  i.e. “www.giftster.com” and “www.thingstogetme.com”. In order to experience their functionalities, I have created logins on both the websites and discovered the following:

- Both allow 'Gift Givers' to intimate another 'Gift Giver' on the gift they are purchasing [2]
- Both websites allow 'Gift Givers' to delete gift suggestions
- Both allow 'Gift Givers' to club along with other 'Gift Giver(s)' in buying a gift
- Both these websites are subscription free services

Using the knowledge, I gained from the two website's, I have decided on my websites functionality i.e. login pages, lists can be created by either the 'Gift Giver' or the 'Gift Recipient' and for audit trails, user session creation and deletion have been used.  

![thingstogetme logo](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/giftster.png) ![giftster logo](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/thingstogetme.png)

#### 4.3 - Gift Giving and the Impacts it has on Society

Gift giving is defined by Belk as "the phenomenon of selecting an object or service 'X' to present as a gift to person 'Y' on 'Z' occasion" [3].

Gift Giving is considered to be a crucial social characteristic that defines Human beings while having a great economic effect as more money is spent of gifts each year. On average a consumer spends more on Christmas holiday gifts [3]. Of course, the amount spent varies from one 'Gift Giver' to another, hence my website will not force the user on the price they need to spend but rather contains a box for them to enter the price of their gift.

Gift giving also has a large social impact. Gifts are seen as symbolic gestures of friendship and are used to strengthen relationships and even form new relationships. Another side to gift giving is the "agapic love" [3] where the gift is an emotional and non-obligatory exchange. For this reason, I have not added a 'return gift' feature so that  a 'Gift Giver' is not offended.

#### 4.4 - The 4 Factors of Gift Appropriateness

Larsen & Watson have said there are 4 factors to decide if a gift is appropriate [3]:

1. "Symbol of the Relationship"
2. "Stage of Life"
3. "The Occasion"
4. "History"

"Symbol of the Relationship" has been explained in Section 4.3 (above) as an important part of Human nature. It can be used to show "agapic love"/the strength of the relationship. [3]

"Stage of Life" is crucial to determine the appropriateness of a gift. For example, you wouldn't give a child a bottle of alcohol for their birthday. For this reason, the creator of the list is able to add the 'Gift Recipients' age if required. It is not a mandatory field in the form.

"The Occasion" of the event is useful for a 'Gift Recipient' to understand the reason for the gift e.g. to not put a joke in a condolence card. Occasion defines the very purpose of the gift giving process.

"History" is an area which is hard to include on such a website as it is very personal and varies from relationship to relationship. But to help make a user remember to consider "history" of their relationship, I have included a summary on the homepage of the website explaining why a user would want to a give a gift.

------



### Section 5 - Technical Details

#### 5.1 - Languages Used

When choosing the languages for the project, I had decided on using just HTML and CSS as they are standard languages to make any website. But after further research, I realised I also needed to use a DBMS (Database Management System)  and a language to 'PULL' and 'PUSH' data to the database. Therefore, I have also used MySQL and PHP. 

MySQL is a free relational database developed back in 1990 [4]. It is still widely used to date. Benefits of MySQL includes the possibility to create data and change/manipulate any data in the database. The easiest way to manipulate the data stored via a website is to use PHP and create a MySQL query to make changes on the database.

PHP is a programming language that can be used for web development to link HTML elements with MySQL queries. It can easily be embedded with HTML in the same file. As 79% [5] of the websites surveyed by 'W3Techs' state that they also use PHP, it must be very popular. PHP has the ability to print (echo) embedded HTML code and make the PHP webpage behave as if it was a normal HTML page. If a certain aspect of the website needs to be printed multiple times, PHP grants power to use loops [4] to automate printing rather than use manual printing techniques.

A web server is required for websites using PHP and if none of them are present, an error will form and the user will only see text without any design elements i.e. colour, tables and font. An Apache web server can help fully utilize a website built with PHP [4].

![html/css logo](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/html.png) 

#### 5.2 - IDE, Server and Web Browser

##### IDE

I considered many IDEs to code my project but I finally decided to use 'Atom', because it's easy to use and navigate. It doesn't show real-time changes but that could easily be done by using a web browser. Atom was great to use due to its ability to help organise and display files.

##### Server

I have used the 'XAMPP' server to help run my website on a 'localhost'. 'XAMPP' is open source and contains useful Apache distributions for Apache server, MariaDB, PHP, and Perl. This 'localhost' enabled me to test my code frequently. It has the ability to display webpages on a 'localhost' as well as run phpMyAdmin (required to host the database and digest SQL queries).

##### Web Browser

Firefox is the web browser I used for testing my project. This is because there is a feature in Firefox which deletes the cache every time the browser is closed, resulting in changes to design appearing quicker.

![atom](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/atom.jpg) ![XAMPP](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/xampp.png) ![firefox](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/firefox.jpg)

------



#### Section 6 - Technical Challenges

##### Challenges experienced and their solutions:

- Before starting this project, I had previous experience on using MySQL. To enhance my skills, I used a YouTube course [6] which helped me get a good understanding of the language and how to use it for my project
- The HTML and CSS part wasn’t a major challenge as I had used the languages for past projects. However, there were some technical bits that I had to learn, such as learning how to make radio buttons and I used a Udemy course [7] to bridge the gap
- PHP was new to me when I started the project and I faced a challenge on how to code 'submit' requests to the database using HTML forms as well as 'PULL' data from the database. I completed a YouTube PHP course to learn this language [8]

During this project, I have enhanced my Web Development skills majorly and learnt how to create a login system, database management and forms which store data in a database. The main learning outcome I set myself at the end of 'Challenge Week' was to learn PHP which I believe I have succeeded in.

The future of the site is to include an Amazon API which allows the user to search a gift by keyword (i.e. toy) and the top 10 Amazon results should appear to choose from.

------



### Section 7 - Final Design/Product Developed

#### 7.1 - HTML

For this website to work, there are 9 HTML files created, as below:

1. [index.html](/gift_giver/index.html) - This file provides the backbones for the home page, giving a brief outline on the purpose for the website to a user
2. [signup.html](/gift_giver/signup.html) -As the name implies, this file enables new user(s) to signup 
3. [login.html](/gift_giver/login.html) - As the name implies, this file provides existing user(s) to login to the website
4. [List.html](/gift_giver/List.html)  - A file which provides a navigational button to the [List_creator.html](/gift_giver/List_creator.html) file
5. [List_creator.html](/gift_giver/List_creator.html) - User(s) can use this page to create a list for their friends, families and loved ones
6. [gift_suggestion.html](/gift_giver/gift_suggestion.html) - User(s) can use this page to add gifts to a list
7. [reaction.html](/gift_giver/reaction.html) - Template file for Success/Error message produced by [login.html](/gift_giver/login.html)
8. [reaction2.html](/gift_giver/reaction2.html) - Template file for Error message produced by [gift_suggestion.html](/gift_giver/gift_suggestion.html)
10. [reaction5.html](/gift_giver/reaction5.html) - Template file for Success message produced by [gift_suggestion.html](/gift_giver/gift_suggestion.html)

All HTML files follow the same structure of displaying the name of the website at the top of the page, the navigation bar (different before and after login), the main content of the page and then the social media contact links. A sample HTML layout can be seen below:

![sample](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/sample_explanation.png)

#### 7.2 - CSS

The website uses two CSS files:

1. [gift.css](/gift_giver/css/gift.css) - Used to provide styling to HTML pages used before login
2. [a_login.css](/gift_giver/css/a_login.css) - Used to provide styling to HTML pages used after login

#### 7.3 - PHP

For this website to work, there are 9 PHP files, as below:

1. [a_home.php](/gift_giver/a_home.php) - This is the landing page after a successful login. It also shows a successful login by  'echoing' the '$_SESSION['username]' which is a variable created by the [login.php](/gift_giver/login.php) file, as seen below:

   ![a_home](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/a_home_explanation.png)

2. [connect.php](/gift_giver/connect.php) - All the PHP files which require connection to the database use this file, as it contains the connection information, as seen below:

   ![connect](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/connect_explanation.png)

3. [gift_suggestion.php](/gift_giver/gift_suggestion.php) - Provides the database functionality for the [gift_suggestion.html](/gift_giver/gift_suggestion.html) page. It checks if the user has entered a valid 'Recipient Name' and 'ListID and redirects to one of the two files accordingly:

   - [reaction2.html](/gift_giver/reaction2.html) - Template file for the Error message and the form data is not saved
   - [reaction5.html](/gift_giver/reaction5.html) - Template file for the Success message and the form data is saved with the 'ListID'

4. [gift.php](/gift_giver/gift.php) - Provides the user with a page to look at a gift list by providing the 'Recepient Name' and 'ListID'. Only the gifts with the same 'ListID' as the one entered by the user are displayed. They are displayed in a table with the column headings: 

   - 'GiftID'
   - 'Gift Idea'
   - 'Price'
   - 'Link'
   - 'Type of Gift'
   - 'Description'
   - 'Buyers'

   Below the table, there are two buttons the user can use to delete gifts and join another to share the cost. This is done by entering the 'GiftID' from the displayed table. A screenshot of the code can be seen below:

   ![gift](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/gift_explanation.png)

5. [List_creator.php](/gift_giver/List_creator.php) - Provides the database functionality for the [List_creator.html](/gift_giver/List_creator.html) page and redirects the user to the [response2.php](/gift_giver/response2.php) file

6. [login.php](/gift_giver/login.php) - Provides the database functionality for the [login.html](/gift_giver/login.html) page. If login is unsuccessful an error message is displayed. If login is successful a user session is created, temporarily storing the users 'ID', 'email' and username' while also redirecting the user to the [a_home.php](/gift_giver/a_home.php) file

7. [logout.php](/gift_giver/logout.php) - Allows the user session to end by using the term 'session_destroy' to delete the users 'ID', 'email' and username', as seen below:

   ![logout](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/logout_explanation.png)

8. [response2.php](/gift_giver/response2.php) - Template file for Success/Error message produced by [List_creator.html](/gift_giver/List_creator.html). It also displays the 'ListID' produced post successful list creation

9. [signup.php](/gift_giver/signup.php) - Provides the database functionality for the [signup.html](/gift_giver/signup.html) page

#### 7.4 - Database in phpMyAdmin

The project required three tables, as follows:

1. 'login' - This table is used to store the login data for the user(s)

   ![login-table](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/login_table.png)

2. 'list' - This table stores all the different lists that have been created

   ![list_table](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/list_table.png)

3. 'Ideas' - This table stores all the different gift suggestions, which are linked to their respective lists via a 'ListID'

   ![Ideas_table](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/ideas_table.png)

   

#### 7.5 - Final Product Developed

When a user first accesses the website, they are greeted with the following home page, informing the user on the purpose of the website:

![Home Page](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/home.png)

A user can sign up using the following page:

![Signup Page](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/signup.png)

If a user has their login details, they can login using the following form on the 'Login' page. As you can see, for privacy the form hides the password. Here is a screenshot of this page:

![Login Page](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/login.png)

If login is successful, the user will be greeted with the following page where their name is shown. A user session is created, where the user(s) data is stored temporarily:

![After Login Page](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/after_login.png)

A user then can open the 'List Creator' page to create a list:

![List Creator Page](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/list_creator.png)

A user then can open the 'Gift Suggestion' page to add gifts to a list. Users can only add gift ideas if they enter the right 'Recipient Name' and 'ListID'. Here is a screenshot of this page:

![Gift Suggestion Page](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/gift_suggest.png)

To view all the gifts on a list, the user can access the 'Gift' page. Users can add their name to a gift offering to bear the cost. Users can also delete self-suggested gift. Users can only see gift ideas if they enter the right 'Recipient Name' and 'ListID'. Here is a screenshot of this page:

![Gift Display Page](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/gift_display.png)

------



### Section 8 - Testing

Various tests were performed on my website. Here are my tests and screenshots of their results:

#### Test 1 - Creating login information using the 'Signup' page

I created two seperate logins using the 'Signup' page, one for a user called Simon and the other for me (Niraj).

I filled out the form with the following information to make an account for myself:

![Niraj Sign Up Data](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/niraj_signup.png)

The following image shows that the 'Signup' pages works as I am able to see the user credentials stored in the 'login' table, as shown here:

![Niraj Sign Up Data in login_table](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/login_table.png)

#### Test 2 - Checking successful login

I logged in with the user account I previosuly made for myself. A successful login is shown in the following image. A successful login is highlighted by the user's name being displayed on the page, this is possible as a temporary session is created for the user. You can also see a successful login changes the navigation bar, allowing the user to access pages for a verfied user. Here is the screenshot:

![Niraj Succesful Login](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/after_login.png)

#### Test 3 - Checking incorrect login

I tried logging in with the details:

Email - niraj@yahoo.com 

Password - hello

As you can see from the the following image, this user doesn't exist:

![login-table](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/login_table.png)

This login produced the following result, showing only valid users can login:

![False login](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/wrong_login.png)

#### Test 4 - Creating a list

The following screenshot shows the data, I entered into the 'List Creator' form:

![Sam list creation](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/sam_birthday.png)

This test produced a successful output as the data was saved to the database, which can be seen as 'ListID' 3 in the following screenshot:

![Sam birthday list_table](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/list_table.png)

#### Test 5 - Submiting a gift idea

The following screenshot shows the data, I entered into the 'Gift Suggestion' form:

![Sam gift idea](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/sam_idea.png)

This test produced a successful output as the data was saved to the database, which can be seen as 'ID' 6 in the following screenshot:

![Sam gift idea saved](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/ideas_table.png)

#### Test 6 - Submiting a gift idea with an invalid 'ListID'

The following screenshot shows an error message when I tried to submit a gift with an invalid 'ListID':

![wrong ListID](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/gift_fail.png)

This test produced an error message as I tried to the save the list with a ListID of 58, which the following image shows does not exist:

![list table](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/list_table.png)

#### Test 7 - Displaying a gift list

The following screenshot shows all the gifts stored in the database:

![Ideas_table](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/ideas_table.png)

While doing the test with 'Recipent Name' as  'sam' and the 'ListID' as '3'. The image shows a successul result by only dsiplaying Sam's gifts, which has the 'ListID as '3', as shown below:

![Sam's gifts](/Users/nirajkhosla/Documents/Niraj Khosla/University/Year 3/CE301 - Capstone Project/gitlab download/ce301_khosla_niraj-master/Images/sam_display.png)

------



### References

[1] -  B. Armour, "Mobile App Vs. Mobile Website: Which Is  The Better Option?," Business 2 Community, 20 April 2018. [Online].  Available:  https://www.business2community.com/mobile-apps/mobile-app-vs-mobile-website-which-is-the-better-option-02048068.  [Accessed 12 April 2021].  

[2] -  [Online]. Available: www.thingstogetme.com. [Accessed 12  April 2021].  

[3] - E. M. Ormandy, EXAMINING THE BEHAVIOUR OF RE-GIFTING USING A MULTI-METHOD APPROACH: University of Canterbury, 2011.   

[4] - M. D. a. J. Phillips, Learning PHP and MySQL, Gravenstein  Highway North, Sebastopol: O’Reilly Media Inc, 2007.   

[5] - [Online]. Available:https://w3techs.com/technologies/details/pl-php [Accessed 12  April 2021].  

[6] - [Online]. Available:https://www.youtube.com/watch?v=7S_tz1z_5bA&t=6785s [Accessed 12  April 2021].  

[7] - [Online]. Available:https://www.udemy.com/course/ultimate-web/learn/lecture/6720394?start=90#overview [Accessed 13  April 2021].  

[8] - [Online]. Available: https://www.youtube.com/watch?v=oJbfyzaA2QA&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn [Accessed 13  April 2021].  

