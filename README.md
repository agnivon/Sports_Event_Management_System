ABSTRACT
In the emerging world of technology, every system is computerized and is available
online. The traditional way of storing the records of sporting events is also now
computerized. The SEMS is a web portal where users can view events details by choice.
The main objective of this application is to maintain records of the events and allow
easy access in viewing and retrieving specific records on requirement. It aims to avoid
the overhead of maintaining physical records which are prone to wear and tear, not easily
editable and not secure. The SEMS website can store the information about a large
number of athletes, events, their result and much more. The business point of view
focuses on selling the athletes profile to sponsors. The user who is just a curious
enthusiast wanting to know more about the sporting events or a potential sponsor can
view the records and retrieve specific information based on his/her choice. The portal is
aimed at providing accurate and latest information to all its users in a secure manner.

TABLE OF CONTENTS
CHAPTERS PAGE NO.
Chapter 1 Introduction 1
Chapter 2 System Requirement 2
2.1 Hardware Requirements 2
2.2 Software Requirements 2
Chapter 3 Problem Description 3
Chapter 4 System Design 4
4.1 ER Diagram 4
4.2 Schema Diagram 5
Chapter 5 Implementation 6
5.1 Table Description 6
5.2 Source code 13
5.3 SQL Trigger 38
5.4 SQL Stored Procedure 39
Chapter 6 Results & Screenshots 40
Chapter 7 Conclusion and Future Scope 44
References 45
IV
LIST OF FIGURES
Fig Number Fig Name Chapter No Page
3.1 ER Diagram 1 4
3.2 Schema Diagram 4 5
5.1.1 Athlete Table 5 7
5.1.2 Event Table 5 8
5.1.3 Country Table 5 9
5.1.4 Record Table 5 10
5.1.5 Result Table 5 11
5.1.6 Sponsor Table 5 12
6.1 Index Page 6 40
6.2 Login Page 6 40
6.3 Register Page 6 41
6.4 Home Page 6 41
6.5 View Data Page 6 42
6.6 Add Data Page 6 42
6.7 Update Data Page 6 43

CHAPTER 1
INTRODUCTION
The SEMS site is an online platform that works with the event data. The SEMS website
is an online platform that helps users to view SEMS data. The database schema is
designed to meet the requirements of the SEMS site. The portal consists of Athlete,
Country, Event, Record, Result and sponsor module. Athlete module is where the users
can view the athlete details. The Event module is where they can view the details of the
different events present. The Country module is where they can view the details of the
countries present in the sporting events. The Result module is where they can view the
results of every event. The Record module is where they can view the world records.
The Sponsor module is where they can view the different sponsors and the money
invested on the athletes.

CHAPTER 2
SYSTEM REQUIREMENT
One of the most difficult tasks is that, the selection of the software, once system
requirement is known is determining whether a software package fits the requirements.
After initial selection further security is needed to determine the desirability of software
compared with other candidates. This section first summarizes the application requirement
question and then suggests more detailed comparisons.
2.1 HARDWARE REQUIREMENT
1. 32/64-bit processor
2. i3 or greater intel processor chip
3. 1.7 or more GHz processor
2.2 SOFTWARE REQUIREMENT
1. Windows 7 or higher version OS
2. Google chrome 7.0 or greater
3. XAMPP web server
4. Microsoft Visual Studio Code

CHAPTER 3
PROBLEM DESCRIPTION
Storing and maintaining a physical copy of the records of athletic events is a tedious and
time-consuming process. Over the years as it becomes very large it becomes difficult to
maintain. The data in these physical copies is prone to wear and tear and can be easily
tampered with. Searching for specific pieces of information in these large physical
copies is not only difficult but also time consuming.
The objective of this project is to:
● Maintain a digital record of the athletes and events in athletic events.
● Easily view the different tables.
● Easily retrieve specific details.
● Easily insert and update and different values in the table.

CHAPTER-4
SYSTEM DESIGN
4.1 ER DIAGRAM:
![image](https://github.com/agnivon/SEMS/assets/122620788/15a17881-4039-4011-a331-e76647535c1c)
Fig 3.1 ER Diagram
