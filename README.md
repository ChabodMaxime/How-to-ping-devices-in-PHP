# How-to-ping-devices-in-PHP

Equipment
-------------------------

- You must create a table in your db called "info" and insert a column called "ip". Then enter the IP addresses.

Introduction
-------------------------
With this script you can ping all the IP addresses that you store in your MYSQL with PHP. 
This script is only valid for all French versions of Windows.


Details
-------------------------
- PDO is configured to force prepared requests. You are therefore protected against SQL injections.
- The exec function is at least protected against command injections.
- Please replace my values with those of your environment.

