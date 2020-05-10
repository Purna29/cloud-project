#!/usr/bin/python
import cgi, cgitb
import MySQLdb

webForm = cgi.FieldStorage()

firstname = webForm.getvalue('firstname')
lastname = webForm.getvalue('lastname')
email = webForm.getvalue('email')
password = webForm.getvalue('MyPass')

db= MySQLdb.connect("localhost","vellalap1","81n4br","vellalap1_db") 

myCursor = db.cursor()

sql = "INSERT INTO UserPass VALUES ('%s','%s','%s','%s');" %(firstname,lastname,email,password)

try:
        myCursor.execute(sql)
        db.commit()
except:
        db.rollback()
db.close()

print "Content-type:text/html\r\n\r\n"
print "<html>"
print "<head>"
print "<title> REGISTRATION FORM</title>"
print "</head>"
print "<body>"
print "<h2> Congratulations! You Have Successfully Register With firstname = %s </h2>" %(firstname)
print "</body>"
print "</html>"
