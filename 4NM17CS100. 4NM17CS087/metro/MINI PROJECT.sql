DROP database if exists MMRS_Data;

create database if not exists MMRS_Data;

use MMRS_Data;

create table CUSTOMER
(Username varchar(20) primary key,
Fname varchar(10),
Lname varchar(10),
Address varchar(20),
Phone_No varchar(10),
Password varchar(16)
);
create table ADMIN
(Admin_Id int primary key AUTO_INCREMENT,
Admin_Name varchar(20),
Age int,
Sex char(1),
Email varchar(30),
Password varchar(16)
);
CREATE TRIGGER age_less_than_18 BEFORE INSERT ON admin
FOR EACH ROW
BEGIN
IF NEW.Age < 18 THEN
   SIGNAL SQLSTATE '45000' 
SET MESSAGE_TEXT = "Admins must be 18+";
END IF;
END;
create table SMARTCARD
(Card_No varchar(10) primary key,
Balance decimal,
Card_Status varchar(15) NOT NULL DEFAULT 'Pending',
Username varchar(20),
Admin_Id int, 
foreign key(Username) references CUSTOMER(Username) on delete cascade,
foreign key(Admin_Id) references ADMIN(Admin_Id)
);

create table ROUTE
(Route_Id int primary key,
Route_Name varchar(200)
);

create table STATION
(Station_Name varchar(25),
Route_Id int,
primary key(Station_Name,Route_Id)
);

create table TRAIN
(Train_Id int primary key AUTO_INCREMENT,
Admin_Id int,
Route_Id int,
foreign key(Admin_Id) references ADMIN(Admin_Id),
foreign key(Route_Id) references ROUTE(Route_Id) on delete cascade
);

create table COMPLAINT
(Comp_Id int primary key AUTO_INCREMENT,
Comp_Subject varchar(50),
Comp_Desc varchar(500),
Comp_Status varchar(20) NOT NULL DEFAULT 'Not_Replied',
Username varchar(20),
foreign key(Username) references CUSTOMER(Username)
);
create table EMAIL
(Username varchar(200),
Email varchar(200),
primary key(Username,Email),
foreign key(Username) references CUSTOMER(Username) on delete cascade
);

create table DISPLAY_STATUS
(From_Station varchar(25),
To_Station varchar(25),
Arrival time,
Departure time,
Train_id int,
primary key(From_Station,To_Station,Train_Id),
foreign key(From_Station) references STATION(Station_Name) on delete cascade,
foreign key(To_Station) references STATION(Station_Name) ,
foreign key(Train_Id) references TRAIN(Train_Id) on delete cascade
);

