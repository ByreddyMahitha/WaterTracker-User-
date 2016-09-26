@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:\Users\ramky\Desktop\summer\wamp/mysql\bin\mysqld.exe" --install "wampstackMySQL" --defaults-file="C:\Users\ramky\Desktop\summer\wamp/mysql\my.ini"

net start "wampstackMySQL" >NUL
goto end

:remove
rem -- STOP SERVICES BEFORE REMOVING

net stop "wampstackMySQL" >NUL
"C:\Users\ramky\Desktop\summer\wamp/mysql\bin\mysqld.exe" --remove "wampstackMySQL"

:end
exit
