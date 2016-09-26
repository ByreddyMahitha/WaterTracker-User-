@echo off
"C:\Users\ramky\Desktop\summer\wamp/mysql\bin\mysql.exe" --defaults-file="C:\Users\ramky\Desktop\summer\wamp/mysql\my.ini" -u root -e "UPDATE mysql.user SET Password=password('%1') WHERE User='root';"
"C:\Users\ramky\Desktop\summer\wamp/mysql\bin\mysql.exe" --defaults-file="C:\Users\ramky\Desktop\summer\wamp/mysql\my.ini" -u root -e "DELETE FROM mysql.user WHERE User='';"
"C:\Users\ramky\Desktop\summer\wamp/mysql\bin\mysql.exe" --defaults-file="C:\Users\ramky\Desktop\summer\wamp/mysql\my.ini" -u root -e "FLUSH PRIVILEGES;"
