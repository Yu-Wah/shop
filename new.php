<h4>Adding Items</h4>
<form action="insert3.php" method="POST">
    Item Name: <input type="text" name="item_name" value="" /> <br/>
    description: <input type="text" name="description" value="" /> <br/>
    category: <select name="category">
        <option>Electronics</option>
        <option>Home Appliances</option>
        <option>Fashion</option> 
   
    </select> <br/>
     price: <input type="text" name="price" value="" /> <br/> 
       stock_quantity: <input type="text" name="stock_quantity" value="" /> <br/>
       image_url: <input type="text" name="image_url" value="" /> <br/>
    
    <input type="submit" name="mode" value="ADD">
    <input type="reset" value="Cancel" />
</form>