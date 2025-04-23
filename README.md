# SQL Injection Simulation (Small Lab)
This repository represents a small SQL Injection Simulation.
You can find 2 files:
- SQL file, **admindashboard.sql**
- PHP file, **sql_injection.php**

1. First, import the SQL file to your phpMyAdmin for example. 
2. Then, access to the PHP file via your browser.
3. In the **username** input you can enter anything. 
4. In the password try a random value to see the normal error message (Verbose error) 
5. Finally, try this password between the parentheses (' or 1=1-- ), to see the SQL Injection
> [!NOTE]
> Even the space after the -- is necessary