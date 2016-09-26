@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

if exist C:\Users\ramky\Desktop\summer\wamp\mysql\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\mysql\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\postgresql\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\postgresql\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\elasticsearch\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\elasticsearch\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\logstash\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\logstash\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\logstash-forwarder\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\logstash-forwarder\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\apache2\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\apache2\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\apache-tomcat\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\apache-tomcat\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\resin\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\resin\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\jboss\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\jboss\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\wildfly\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\wildfly\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\activemq\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\activemq\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\openoffice\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\openoffice\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\subversion\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\subversion\scripts\serviceinstall.bat INSTALL)
rem RUBY_APPLICATION_INSTALL
if exist C:\Users\ramky\Desktop\summer\wamp\mongodb\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\mongodb\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\lucene\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\lucene\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\third_application\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\third_application\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\nginx\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\nginx\scripts\serviceinstall.bat INSTALL)
if exist C:\Users\ramky\Desktop\summer\wamp\php\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\php\scripts\serviceinstall.bat INSTALL)
goto end

:remove

if exist C:\Users\ramky\Desktop\summer\wamp\third_application\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\third_application\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\lucene\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\lucene\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\mongodb\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\mongodb\scripts\serviceinstall.bat)
rem RUBY_APPLICATION_REMOVE
if exist C:\Users\ramky\Desktop\summer\wamp\subversion\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\subversion\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\openoffice\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\openoffice\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\jboss\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\jboss\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\wildfly\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\wildfly\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\resin\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\resin\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\activemq\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\activemq\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\apache-tomcat\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\apache-tomcat\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\apache2\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\apache2\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\logstash-forwarder\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\logstash-forwarder\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\logstash\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\logstash\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\elasticsearch\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\elasticsearch\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\postgresql\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\postgresql\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\mysql\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\mysql\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\php\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\php\scripts\serviceinstall.bat)
if exist C:\Users\ramky\Desktop\summer\wamp\nginx\scripts\serviceinstall.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\nginx\scripts\serviceinstall.bat)
:end
