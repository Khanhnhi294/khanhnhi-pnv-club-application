 <!-- HEADER -----------------------------------------  -->
   <link rel="stylesheet" href="style.css">
 <!-- MAIN -----------------------------------------  -->
 
 <form class="form" action="result.php"  method="post">
        <label class="lableName" for="name" id="lableName">Name</label>
        <input type="text" placeholder="Your name " name="name"> <br><br>

        <label class="lable" for="club"> Club you want to apply </label>
        <select name="lang" id="lang-select">
            <option value=""> Robotic club </option>
            <option value="IT club">IT club</option>
            <option value="DA club">DA club</option>
            <option value="ENG club">ENG club</option>
        </select> <br><br>

        <label class="lable" for="time"> Be time for you </label>
        <input type="radio" name="time" value=" Saturday mornings"> Saturday mornings  
        <input type="radio" name="time" value="Saturday afternoons"> Saturday afternoons <br><br> 
        <input type="radio" class="input" name="time" value="Sunday mornings"> Sunday mornings <br><br> 
        
        <label class="lable" for="skill">Yours skill</label>
        <div class="skill">
            <div>
                <input type="checkbox" value=" The best coder " class="input" name="skill[]"> The best coder <br><br>
                <input type="checkbox" value=" A super star  "   class="input" name="skill[]"> A super star  <br><br>
                <input type="checkbox" value=" Singer "  class="input" name="skill[]"> Singer <br><br>
                <input type="checkbox" value=" The best eater "  class="input" name="skill[]"> The best eater <br><br>
            </div>
            <div>
                <input type="checkbox" value="  Good in arts "  name="skill[]"> Good in arts <br><br>
                <input type="checkbox" value=" A crazy dancer "  name="skill[]"> A crazy dancer  <br><br>
                <input type="checkbox" value=" Good in design "  name="skill[]"> Good in design  <br><br>
                <input type="checkbox" value=" Good in speeches "  name="skill[]" > Good in speeches <br><br>

            </div>
        </div>
        
        <button class="submit" name="submit"> Submit!</button> 
    </form>

 <!-- FOOTER -----------------------------------------  -->
 