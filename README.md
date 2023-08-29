# Restaurant Booking Management System - Cherry Restaurant

## Purpose of the "Cherry Restaurant"
- After discussing various ideas that all team members proposed, we decided that the website that we were going to build for the project of Web Systems Development course, using client-side and server-side technologies would be a Restaurant Booking Management System.
- Restaurant Booking Management System, basically consists in a restaurant’s website, named “Cherry Restaurant”, which allows its users to go through the restaurant information details and if they wish also make reservations.
- When a user visits the web site, he/she has the opportunity to have a look at the
  <ul>
    <li> <em>Home page</em>, which welcomes the user to the restaurant’s website;</li>
    <li><em>About Us page</em>, which represents a general information about the restaurant’s history of foundation and their vision;</li>
    <li><em>Menu page</em>, which contains information about the menu of the restaurant and the respective prices of the dishes;</li> 
    <li><em>Gallery page</em> in which the user can go through the pictures that show some of the spaces of the restaurant and dishes offered by it;</li> 
    <li><em>Contact Us page</em> which contains contacts details and location details of the Cherry Restaurant;</li>
    <li><em>Log In page</em> which gives the user the possibility to log in as a “User”, if he/she has already an account and is a customer of the restaurant, however, if not under this page they can also choose to register.</li>
  </ul></br>
  
- If the user chooses to register (sign up) or log in, then he/she will have the opportunity to make use of the customer’s functionalities, which include: making a reservation and showing the reservation that the user has made. 
- On the other hand, we have also the admin, who represents in our case the manager of the restaurant who is responsible for handling bookings. The admin has also the opportunity to log in under the <em>Log In page</em> in the navigation bar by choosing the respective role, that of an Admin. To continue with, the admin of our website has a broader range of functionalities, which include:
  <ol>
    <li>Showing all reservations;</li>
    <li>Showing reservation based on location, username or date;</li>
    <li>Showing all the registered users or customers of the system.</li>
  </ol></br>
  
- All in all, we can say that the website that we have built contains the most important features that a restaurant booking management system should have. 

## Specification of the Website Functionalities

- The Use Case View of the Restaurant Booking Management System, attached below encompasses the use cases that describe the behavior of our system as seen by its end users. So, basically each use case represents each of the functionalities that our application will offer from the user’s point of view.</br>
<div align="center">
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/42ee47df-ffa0-4b48-9541-422306451062">
  </br>
  <p><b>Figure 1:</b> Use Case Diagrams</p>
</div>
</br>

- To start with, our website has three main actors, which are:
  1. Users
  2. Customers
  3. Admin.
  However, in the Use Case Diagram we have also included the System just to make clearer and more understandable the flow of the website. Hence, in order to better understand the functionalities of the actors of our website, we will further elaborate them below.</br>
- The <em><b>User</b></em> actor in the UML Use Case Diagram represents every person who visits the website, but is not a customer of the restaurant, meaning that he/she does not have an account since they have not been registered yet. These users have only the opportunity to:
  1. Visit the website and see information regarding the restaurant history of foundation and vision,
  2. Menu
  3. Contact details
  4. Gallery.
- To continue with, the <em><b>Customer</b></em> actor in the UML Use Case Diagram represents every person who has registered as a customer and already has an account. By logging in to the website, this actor has additional capabilities when compared to the User, because despite being able to visit the website and see information regarding the restaurant history of foundation and vision, menu, contact details and also gallery, they can also:
   1. Make reservations
   2. See the reservations that they have previously done
   3. Delete their account if they no longer wish to access our restaurant’s website functionalities.
- Next, the <em><b>Admin</b></em> represents a person from the restaurant staff who is responsible for bookings. As well as the Customer, the Admin can also log in to the website and access the different functionalities that he/she has. Differently from the Customer, the Admin does not have the opportunity to sign up, because his credentials: username, email and password are predefined and manually stored by us in the database.  Moreover, with regards to the admin functionalities, the admin can use this digitalized system to organize the reservations by:
  1. Showing all the reservations
  2. Showing reservations based on:
     1. Location (“Cherry Restaurant Villa” or “Cherry Restaurant Bllok”)
     2. Username
     3. Date
  3. Showing all the registered users or customers of the system.
- Lastly, with regards to the <em><b>System</b></em>, we have referred to the restaurants system which basically is the one that interacts with the other 3 actors. For instance, when a user registers on the website, the system collects the respective information, or when a customer makes a reservation, the system collects it, in addition when a customer wants to see the reservation that he/she has previously made the system displays them etc.

## Database Design (Entity Relationship Diagram)

- For building the ER Diagram, we used Star UML. In our project we have created one database, which consists of three tables respectively:
  1. Admin
  2. Reservation
  3. User 
</br>
<div align="center">
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/2e248816-0e74-4606-bd24-583a26a6d2f9">
  </br>
  <p><b>Figure 2:</b> ER Diagram</p>
</div>
</br>

- The <em><b>Admin</b></em> table stores the information of the admin credentials and it consists four columns:
  1. Admin_ID of type int
  2. Username of type varchar
  3. Email of type varchar
  4. Password of type varchar.</br></br>
  - The primary key of the admin table is Admin_ID. 
- To continue with, we have the <em><b>User</b></em> table, which contains the credentials of the users registered to the website. This table includes 5 columns, which are:
  1. User_ID of type int
  2. Username of type varchar
  3. Email of type varchar
  4. Password of type varchar
  5. Date Registered of type date.</br></br>
  - The primary key of this table is User_ID, while the unique keys of the user table are the username and email.
  - <em><b>Note</b></em>: Even though we have named the table USER, we are actually referring to the customer of the website.
- Lastly, we have the <em><b>Reservation</b></em> table, which stores all the information filled by the customer in the reservation form. This table has 9 columns, which are:
  1. Reservation_ID of type int
  2. First_Name of type varchar
  3. Last_Name of type varchar
  4. Date of type date
  5. Time of type time
  6. Number of Guests of type int
  7. Telephone_Number of type int
  8. Comments of type varchar
  9. User_ID of type int.</br></br>
  - User_ID also represents the foreign key for mapping the customer with their respective reservations.

- With regards to the relationships between the tables, we have only one relationship between user table and reservation table. This relationship is of type one to many, which implies that one customer can have many reservations.


## Demonstration of Website Usage

- <b>Note:</b>
  - The credentials of the admin are:</br>
    <b>Email:</b> admin@cherry.com</br>
    <b>Password:</b> admin123</br>
    
  - The credentials of the customers are:</br>
    <b>Email:</b> dajnanako@gmail.com, <b>Password:</b> dajna123</br>
    <b>Email:</b> enditrico@gmail.com, <b>Password:</b>: endi123</br>
    <b>Email:</b> juxhinkamberi@gmail.com, <b>Password:</b>: juxhin123</br>

- However, you can add another customer, if you wish.

### Screenshots

- The screenshot attached below shows the <em><b>Home page</b></em>, which welcomes the user to the restaurant’s website. In addition, from the navigation we can see other pages that our website contains: <em><b>About Us page</b></em>, which represents a general information about the restaurant’s history of foundation and their vision; <em><b>Menu page</b></em>, which contains information about the menu of the restaurant and the respective prices of the dishes; <em><b>Gallery page</b></em> in which the user can go through the pictures that show some of the spaces of the restaurant and dishes offered by it; <em><b>Contact Us page</b></em> which contains contacts details and location details of the Cherry Restaurant; and lastly the <em><b>Log In</b></em> page which gives the user the possibility to log in as a “User”, if he/she has already an account and is a customer of the restaurant, however, if not under this page they can also choose to register. To represent the style of each of the pages we have attached below the screenshots for each of them.


<div align="center">
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/e95c41a8-b806-44d9-8bbb-3357dde68420">
  </br>
  <p><b>Figure 3:</b> Home Page</p>
  </br></br>
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/e9dd26f9-084d-4b78-9e32-4a177b27791f">
  </br>
  <p><b>Figure 4:</b> About Us Page</p>
  </br></br>
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/371cff2e-785c-4369-ac88-3695605f0866">
  </br>
  <p><b>Figure 5:</b> Menu Page</p>
  </br></br>
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/b051919c-b465-41f9-9bd6-8dacd8b6a81a">
  </br>
  <p><b>Figure 6:</b> Gallery Page</p>
  </br></br>
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/2736fdc7-4503-456e-af97-9782be2057ff">
  </br>
  <p><b>Figure 7:</b> Contact Us Page</p>
</div></br>
</br>

- In the <em><b>Log In</b></em> page the user of the website has the opportunity to log in if they have already been registered or click “Register Here” to register if they do not have an account. In addition, for the user to be logged in they have to choose the role whether they are an admin or a user. The credentials are checked in the database.
<div align="center">
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/f18cf289-bfea-4065-bae0-a55a82053e9d">
  </br>
  <p><b>Figure 8:</b> Log In Page</p>
</div></br>
</br>

- In this page, the user can fill up the form with his/her credentials in order to create an account.
<div align="center">
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/9a81b540-1cf1-4e5e-9970-39d9d0db756e">
  </br>
  <p><b>Figure 9:</b> Register Page</p>
</div></br>
</br>

- After the user logs in, except of the first 5 pages that are common with the user’s view of the website, two other pages will be displayed, which are <em><b>Reservation</b></em> and <em><b>Settings</b></em>. The screenshot below shows exactly the <em><b>Reservation page</b></em>, which gives the customer the opportunity to choose between two options: Book a Table or Show My Reservation.
<div align="center">
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/15c10318-8550-4374-b6d2-1fc8228e93de">
  </br>
  <p><b>Figure 10:</b> Reservation Page</p>
</div></br>
</br>

- If the user chooses to book a table, then the below view will be appeared, which represents the form that each customer should fill if they wish to make a reservation. The form consists of 8 fields from which 7 are required and they are: First Name, Last Name, Date, Time, Number of Guests, Location, and Telephone Number. Likewise, we also have one non-required fields, which is the Comment field, where the customer can write extra details or requirements for their reservations.
<div align="center">
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/ae25cd08-c4b0-4afa-8102-35a8666f271c">
  </br>
  <p><b>Figure 11:</b> Reservation Form Page</p>
</div></br>
</br>

- Next, if the customer clicks on Show My Reservations, then the view below will appear. Despite of being able to see their reservations, he/she also has the opportunity to cancel the reservation if he/she has changed his/her mind. However, it is important to mention that the cancelation of the reservation cannot be made on the exact day of the reservation, because the restaurant has to know at least one day before if there are any changes with regards to the bookings or reservations.
<div align="center">
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/c9fd20ba-aed5-4e86-b8a4-e3c84a87c91a">
  </br>
  <p><b>Figure 12:</b> My Reservations Page</p>
</div></br>
</br>

- On the <em><b>Settings Page</b></em>, the customer has 2 opportunities, which are: Log Out and Delete My Account. The “Log Out” button logs the customer out of the website, while the “Delete My Account” button deletes their account.
<div align="center">
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/cb430942-ac20-4d91-a02b-6c92e51b4fc7">
  </br>
  <p><b>Figure 13:</b> Settings Page</p>
</div></br>
</br>

- If the user logs in as an admin, then he/she will be redirected to his respective pages, from which the first one is attached below. <em><b>Show Reservation by Location page</b></em> gives the admin the opportunity to see the reservation, based on the location that the customer has chosen when he/she filled the reservation form. Hence, for example, if the admin chooses “Cherry Restaurant Villa”, then the reservation from this restaurant will be displayed. If there are no reservations on that location, an alert box will be displayed, notifying the admin that there are no reservations on that location.
<div align="center">
  <img src="![image](https://github.com/Endi18/Web-Application/assets/85561383/c668eba1-4c47-4744-88d2-52c994861c1c)">
  </br>
  <p><b>Figure 14:</b> Show Reservations by Location Page</p>
</div></br>
</br>

- The screenshot attached below shows All User page, on which the admin can see all the user that are registered in the website.  If there are no user registered in the website, an alert box will be displayed, notifying the admin that there are no user registered in the website.
<div align="center">
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/dbc3c1d6-1edb-4156-8bc0-495ff73137d1">
  </br>
  <p><b>Figure 15:</b> Show All Users Page</p>
</div></br>
</br>

- Then, we have Reservation by Username page, where the admin can see all the reservation that a specific username has made. If there are no reservations under that username, an alert box will be displayed, notifying the admin that there are no reservations under that username.
<div align="center">
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/38fd78ed-6547-4a0c-a50c-cc613e85850a">
  </br>
  <p><b>Figure 16:</b> Show Reservations by Username Page</p>
</div></br>
</br>

- Then, we have Reservation by Date page, where the admin can see all the reservations for a specific date. If there are no reservations on that date, an alert box will be displayed, notifying the admin that there are no reservations for the date that he chose.
<div align="center">
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/4185ace2-56da-469f-b58e-0e1e3b895ccf">
  </br>
  <p><b>Figure 17:</b> Show Reservations by Date Page</p>
</div></br>
</br>

- Then, we have the Reservations page, where the admin can see all the reservations. If there are no reservations, an alert box will be displayed, notifying the admin that there are no reservations.
<div align="center">
  <img src="https://github.com/Endi18/Web-Application/assets/85561383/2894227a-ae6f-49a9-9ccd-d718a8508a3b">
  </br>
  <p><b>Figure 18:</b> All Reservations Page</p>
</div></br>
</br>
