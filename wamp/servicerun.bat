@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist C:\Users\ramky\Desktop\summer\wamp\hypersonic\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\server\hsql-sample-database\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\ingres\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\ingres\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\mysql\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\mysql\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\postgresql\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\postgresql\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\elasticsearch\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\elasticsearch\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\logstash\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\logstash\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\logstash-forwarder\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\logstash-forwarder\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\apache2\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\apache2\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\openoffice\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\openoffice\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\apache-tomcat\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\apache-tomcat\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\resin\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\resin\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\activemq\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\activemq\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\jboss\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\jboss\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\wildfly\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\wildfly\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\jetty\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\jetty\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\subversion\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\subversion\scripts\servicerun.bat START)
rem RUBY_APPLICATION_START
if exist C:\Users\ramky\Desktop\summer\wamp\lucene\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\lucene\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\mongodb\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\mongodb\scripts\servicerun.bat START)
if exist C:\Users\ramky\Desktop\summer\wamp\third_application\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\third_application\scripts\servicerun.bat START)
goto end

:stop
echo "Stopping services ..."
if exist C:\Users\ramky\Desktop\summer\wamp\third_application\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\third_application\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\lucene\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\lucene\scripts\servicerun.bat STOP)
rem RUBY_APPLICATION_STOP
if exist C:\Users\ramky\Desktop\summer\wamp\subversion\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\subversion\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\jetty\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\jetty\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\hypersonic\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\server\hsql-sample-database\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\jboss\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\jboss\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\wildfly\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\wildfly\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\resin\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\resin\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\activemq\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\activemq\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\apache-tomcat\scripts\servicerun.bat (start /MIN /WAIT C:\Users\ramky\Desktop\summer\wamp\apache-tomcat\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\openoffice\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\openoffice\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\apache2\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\apache2\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\logstash-forwarder\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\logstash-forwarder\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\logstash\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\logstash\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\elasticsearch\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\elasticsearch\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\ingres\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\ingres\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\mysql\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\mysql\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\mongodb\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\mongodb\scripts\servicerun.bat STOP)
if exist C:\Users\ramky\Desktop\summer\wamp\postgresql\scripts\servicerun.bat (start /MIN C:\Users\ramky\Desktop\summer\wamp\postgresql\scripts\servicerun.bat STOP)

:end
