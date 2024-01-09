# ABSTRACT

In the emerging world of technology, every system is computerized and is available online. The traditional way of storing the records of sporting events is also now computerized. The SEMS is a web portal where users can view events details by choice. The main objective of this application is to maintain records of the events and allow easy access in viewing and retrieving specific records on requirement. It aims to avoid the overhead of maintaining physical records which are prone to wear and tear, not easily editable and not secure. The SEMS website can store the information about a large number of athletes, events, their result and much more. The business point of view focuses on selling the athletes profile to sponsors. The user who is just a curious enthusiast wanting to know more about the sporting events or a potential sponsor can view the records and retrieve specific information based on his/her choice. The portal is aimed at providing accurate and latest information to all its users in a secure manner.

# INTRODUCTION

The SEMS site is an online platform that works with the event data. The SEMS website is an online platform that helps users to view SEMS data. The database schema is designed to meet the requirements of the SEMS site. The portal consists of Athlete, Country, Event, Record, Result and sponsor module. Athlete module is where the users can view the athlete details. The Event module is where they can view the details of the different events present. The Country module is where they can view the details of the countries present in the sporting events. The Result module is where they can view the results of every event. The Record module is where they can view the world records. The Sponsor module is where they can view the different sponsors and the money invested on the athletes.

# SYSTEM REQUIREMENT
One of the most difficult tasks is that, the selection of the software, once system requirement is known is determining whether a software package fits the requirements. After initial selection further security is needed to determine the desirability of software compared with other candidates. This section first summarizes the application requirement question and then suggests more detailed comparisons.


## (i)	HARDWARE REQUIREMENT
1.	32/64-bit processor
2.	i3 or greater intel processor chip
3.	1.7 or more GHz processor

## (ii)	SOFTWARE REQUIREMENT
1.	Windows 7 or higher version OS
2.	Google chrome 7.0 or greater
3.	XAMPP web server
4.	Microsoft Visual Studio Code

# PROBLEM DESCRIPTION
 

Storing and maintaining a physical copy of the records of athletic events is a tedious and time-consuming process. Over the years as it becomes very large it becomes difficult to maintain. The data in these physical copies is prone to wear and tear and can be easily tampered with. Searching for specific pieces of information in these large physical copies is not only difficult but also time consuming.
The objective of this project is to:

●	Maintain a digital record of the athletes and events in athletic events.<br>
●	Easily view the different tables.<br>
●	Easily retrieve specific details.<br>
●	Easily insert and update and different values in the table.<br>

# SYSTEM DESIGN
 


## ER DIAGRAM:
![image](https://github.com/agnivon/SEMS/assets/122620788/c05a5d87-4256-45fd-8460-a530cfae6238)<br>

## SCHEMA DIAGRAM:
![image](https://github.com/agnivon/SEMS/assets/122620788/dc7fee32-2719-4bb5-90c1-573bac83de3d)<br>
<br>

# IMPLEMENTATION
 


## TABLE DESCRIPTION:  

ATHLETE TABLE:


CREATE TABLE `athlete` (  
`Athlete_Id` int(4) NOT NULL,  
`Athlete_Name` varchar(20) NOT NULL,  
`Gender` char(1) NOT NULL,  
`DOB` date NOT NULL,  
`Country_Code` int(3) DEFAULT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  


ALTER TABLE `athlete`  
ADD PRIMARY KEY (`Athlete_Id`),  
ADD KEY `CountryForKey` (`Country_Code`) USING BTREE; ALTER TABLE `athlete`  
MODIFY `Athlete_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;  
ALTER TABLE `athlete`  
ADD CONSTRAINT `Athlete_CountryForKey` FOREIGN KEY (`Country_Code`) REFERENCES `country` (`Country_Code`) ON DELETE SET NULL ON UPDATE NO ACTION;    
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/6bd03732-5ead-4351-8450-139473a7a289)<br>
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/2cd62bea-8794-4db4-a53b-aa9ea7c2f40c)<br>
The athlete table contains all basic information about the athletes participating in various events. The attributes are Athlete_Id, Athlete_Name, Gender, DOB and Country_Code.  

EVENT TABLE:    

CREATE TABLE `event` (  
`Event_Id` int(4) NOT NULL,  
`Event_Name` varchar(20) NOT NULL,  
`Event_Date` date NOT NULL,  
`Event_Type` char(1) NOT NULL,  
`Venue` varchar(20) NOT NULL,  
`Country_Code` int(3) DEFAULT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  


ALTER TABLE `event`  
ADD PRIMARY KEY (`Event_Id`),  
ADD KEY `CountryForKey` (`Country_Code`) USING BTREE; ALTER TABLE `event`    
MODIFY `Event_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;  
ALTER TABLE `event`  
 
 
ADD CONSTRAINT `Event_CountryForKey` FOREIGN KEY (`Country_Code`) REFERENCES `country` (`Country_Code`) ON DELETE SET NULL ON UPDATE NO ACTION;  
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/311446d1-bd13-45f4-91cc-ab5a1c94591e)  
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/d9044678-d37d-4c9e-942f-bad02dcf5b1b)  
The event table contains information about all the sporting events in major sports festivals and games. The attributes include Event_Id, Event_Name, Event_Date, Event_Type, Venue and Country_Code.  

COUNTRY TABLE:  


CREATE TABLE `country` (  
`Country_Code` int(3) NOT NULL,  
`Country_Name` varchar(20) NOT NULL,  
`Continent` varchar(20) DEFAULT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  


ALTER TABLE `country`  
ADD PRIMARY KEY (`Country_Code`); ALTER TABLE `country`  
 
 
MODIFY `Country_Code` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;  
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/1c303595-8a35-497c-af95-0b15aecfc3b3)  
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/b5e4a7de-35d0-4d63-aba5-a7882dfcdac2)  
The country table contains all the details about all the countries which the athletes represent and the host countries for the events. The attributes consist of Country_Code, Country_Name and Continent.  

RECORD TABLE:  


CREATE TABLE `record` (  
`Result_Id` int(4) DEFAULT NULL,  
`Event_Name` varchar(20) NOT NULL,  
`Event_Type` char(1) NOT NULL,  
`Athlete_Id` int(4) DEFAULT NULL,  
 
 
`Record_Time` int(8) NOT NULL DEFAULT 99999999  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  


ALTER TABLE `record`  
ADD PRIMARY KEY (`Event_Name`);  









