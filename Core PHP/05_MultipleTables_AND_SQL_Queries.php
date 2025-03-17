<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section id="select" >
        <h3>Select Query</h3>
        <?php echo "select * from tablename" ?>
    </section>
    <section id="update" >
        <h3>Update Query</h3>
        <?php echo "UPDATE TABLE SET col_name1='val1', col_name2='val2', col_name3='val3' WHERE id='id'"; ?>
    </section>
    <section id="delete" >
        <h3>Delete Query</h3>
        <?php echo "DELETE FROM tablename WHERE id='id'"; ?>
    </section>
    <section id="delete" >
        <h3>Insert Query</h3>
        <?php echo "INSERT INTO tablename(col1,col2,col3) VALUES('val1','val2','val3');" ?>
    </section>
    <section id="where" >
        <h3>Where Clouse Query</h3>
        <?php echo "UPDATE TABLE SET col_name1='val1', col_name2='val2', col_name3='val3' WHERE id='id'"; ?>
    </section>
    <section id="like" >
        <h3>Like Clouse Query</h3>
        <?php echo "select * from tablename where city like='Ahmedabad'"; ?>
    </section>
    <section id="groupby" >
        <h3>Group by Clouse Query</h3>
        <?php echo "SELECT COUNT(CustomerID), Country FROM Customers GROUP BY Country"; ?>
    </section>
    <section id="having" >
        <h3>Having Clouse Query</h3>
        <?php echo "SELECT COUNT(CustomerID), Country FROM Customers GROUP BY Country HAVING COUNT(CustomerID) > 5"; ?>
    </section>
    <section id="limit" >
        <h3>Limit Clouse Query</h3>
        <?php echo "SELECT * FROM Customers WHERE Country='India' LIMIT 3"; ?>
    </section>
    <section id="offset" >
        <h3>Offset Clouse Query</h3>
        <?php echo "SELECT Fname, Lname FROM Employee ORDER BY Salary OFFSET 1 ROWS"; ?>
    </section>
    <section id="subqueries" >
        <h3>subqueries Query</h3>
        <?php echo "SELECT NAME, LOCATION, PHONE_NUMBER FROM DATABASE WHERE ROLL_NO IN (SELECT ROLL_NO FROM STUDENT WHERE SECTION='A')"; ?>
    </section>
    <section id="and" >
        <h3>AND Query</h3>
        <?php echo "SELECT column1, column2, ... FROM table_name WHERE condition1 AND condition2 AND condition3 ..."; ?>
    </section>
    <section id="or" >
        <h3>OR Query</h3>
        <?php echo "SELECT column1, column2, ... FROM table_name WHERE condition1 OR condition2 OR condition3 ..."; ?>
    </section>
    <section id="not" >
        <h3>NOT Query</h3>
        <?php echo "SELECT column1, column2, ... FROM table_name WHERE NOT condition"; ?>
    </section>
    <section id="in" >
        <h3>IN Query</h3>
        <?php echo "SELECT * FROM Customers WHERE Country NOT IN ('Germany', 'France', 'UK')"; ?>
    </section>
</body>
</html>