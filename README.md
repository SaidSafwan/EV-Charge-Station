# **Electric Vehicle Charging Station (EVCS)**

Welcome to the **Electric Vehicle Charging Station (EVCS)** project! This repository contains the source code and instructions to run the EVCS on your local machine using XAMPP, MySQL, and PHP. Please follow the instructions below for a smooth setup experience.

## **Project Setup**

To successfully run this project, please follow these steps:

### **1. Install XAMPP**

If you don’t have XAMPP installed, download and install it from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).

- **Note:** During the installation process, make sure to select **MySQL** in the installation options.

### **2. Install MySQL and Change Port Number (if needed)**

By default, MySQL runs on port `3306`. However, if you have other MySQL servers running on your machine (e.g., from a standalone MySQL installation), you may need to change the port.

#### **Change MySQL Port:**

1. **Check Port Availability**:
   - Open **CMD** (Command Prompt) and run:
     ```cmd
     netstat -a
     ```
     This command will show you all the active ports on your machine. Look for any ports in the **3306** range (or your selected port) to check if it is already in use.

2. **Update Port in XAMPP**:
   - If port `3306` is already in use, you can change the port.
   - Open the XAMPP Control Panel.
   - Click on the **Config** button next to MySQL and select **my.ini**.
   - Press **Ctrl + H** to replace all occurrences of `3306` with a new port number, for example, `3307`.
   - Save the file.

3. **Set MySQL Config in XAMPP**:
   - Go back to the XAMPP Control Panel, and on the top right, click **Config** and select **MySQL**.
   - Change the port number to the new one you selected (e.g., `3307`).

4. **Update PHP Code**:
   - When establishing the MySQL connection in your PHP code, specify the port number as:
     ```php
     $mysqli = new mysqli("localhost:3307", "username", "password", "dbname");
     ```

### **3. Set Up Project Files**

1. **Move Project Files to the XAMPP Directory**:
   - Copy the project folder (including all PHP files and related assets) into the `htdocs` directory of your XAMPP installation (usually located at `C:\xampp\htdocs\`).
   - For example, if your project folder is called `EVCS`, the file path should be: `C:\xampp\htdocs\EVCS\`.

### **4. Run XAMPP**

1. **Start XAMPP**:
   - Open the **XAMPP Control Panel**.
   - Start both the **Apache** and **MySQL** services. If you have changed the MySQL port, make sure that MySQL is running on the correct port.

2. **Access the Project**:
   - In your web browser, go to `http://localhost/EVCS/index.php` to access the project.

### **5. Test the Project**

Once you've completed the setup, you can test the project by navigating to `http://localhost/EVCS/index.php` in your browser. Ensure that everything is working as expected, including user login, database operations, and page routing.

---

## **Important Notes**

1. **Default Port Change**:
   - If you're using a custom MySQL port, you need to manually change the port in **XAMPP** and also in your **PHP connection script** every time you open XAMPP.
   - **To set a default port**, you would need to modify your XAMPP configuration files further. Unfortunately, XAMPP doesn't provide an option to make the custom port default across restarts, so you’ll have to manually change it every time you launch XAMPP. There's no simple way to set a permanent default port without advanced configuration.

2. **MySQL Version**:
   - The MySQL version in **XAMPP** is typically the same as in a standalone installation, but some differences may arise depending on the XAMPP version you're using.
   - **phpMyAdmin** is a tool included in XAMPP to manage MySQL databases through a web interface.

---

## **Troubleshooting**

If you face any issues during setup:

- **Port Conflicts**: If another application is using the same port (e.g., port 3306), you'll need to change MySQL's port in XAMPP and update the connection details in your PHP scripts.
- **Database Access Issues**: Make sure that the **MySQL service** in XAMPP is running. You can check the status from the XAMPP Control Panel.

---

### **Additional Information**

- **MySQL Version**: The MySQL version bundled with XAMPP may be different from the version you installed separately. Be sure to adjust configurations if needed.
- **phpMyAdmin**: A web-based interface for MySQL. You can access it by going to `http://localhost/phpmyadmin` in your browser. You can manage your MySQL databases here.

---

This `README` file should provide clear instructions for setting up, running, and troubleshooting your project. Let me know if you need further clarification or modifications!
