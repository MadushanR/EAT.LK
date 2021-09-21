<input type="radio" name="type" <?php if (isset($type) && $type=="All") echo "$type";?> checked value="All">All
<input type="radio" name="type" <?php if (isset($type) && $type=="Vegetarian") echo "$type";?> value="Vegetarian">Vegetarian
<input type="radio" name="type" <?php if (isset($type) && $type=="Non-Vegetarian") echo "$type";?> value="Non-Vegetarian">Non-Vegetarian