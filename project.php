<!DOCTYPE html>
<html lang="en">
<?php
include('./header.php'); 
?>

<body>
<div class="project-hero">
    <?php
    include('./nav/navbar.php');
    include('./project_top.php');
    ?>
</div>

<table class="role-table">
  <tr>
    <th>My role</th>
    <th>Duration</th>
    <th>Tools used</th>
  </tr>
  <tr>
    <td>Interviews, Persona, User flow, Low-fi wireframes, High-Fi Wireframes, Prototype</td>
    <td>April-June (3 months)</td>
    <td>FlowMapp, Balsamiq, AdobeXD, Figma</td>
  </tr>
</table>

<h2 id="headlines">Project timeline</h2>
<img class="timeline" src="./img/timeline.png" alt="">

<h2 id="headlines">Why is cooking at home important? What is the problem?</h2>
<p id="paragraphs">Nowadays people are eating out more or buying processed or frozen foods because they think cooking is too time-consuming and requires a lot of skills.
Also, a lot of food is wasted or thrown away because people tend to buy groceries they don’t need at the moment and
 after not using them all they have to thrown them away. <span>(In the US, 30-40% of the food is wasted. Source: usda.gov)</span></p>

 <h2 id="headlines">What do potential users think? (Interviews)</h2>

  <div class="interviews">
      <div>
        <h3>Which part of the cooking process do you find the most frustrating?</h3>
        <p id="paragraphs2">“... Planning for meals and looking for recipes usually takes the most time because sometimes
      I don’t have some of the ingredients in my pantry. I also don’t like to spend too much time on cutting veggies and thawing meat. “</p>
      </div>
      <div>
        <h3>What would you like to change about your eating habits?</h3>
        <p id="paragraphs2">“... I would like to not skip breakfast in the morning, and would like to start prepping my meals 
          so that I don’t spend too much time on cooking during the week. 
          I would also like to include more home-cooked meals. “</p>
      </div>
      <div>
        <h3>Do you plan your grocery shopping in advance?</h3>
        <p id="paragraphs2">“... Usually I have a general idea what I want to buy, like milk, coffee or other things I ran out of. When it comes to fruits,
          veggies and fresh food, usually I don’t know what to buy because I don’t know
            what to use those ingredients for. “</p>
      </div>
      <div>
        <h3>How experienced are you at cooking?</h3>
        <p id="paragraphs2">“... I don’t cook much other than an occasional bacon and eggs breakfast and toast.
          Usually I don’t have time to cook, or I’m too tired or would just like to spend my time doing something else. “</p>
      </div>
    </div>

    <p id="paragraphs">Based on the interviews and research done on people’s motives not to cook and to eat out 
      or buy pre-made food and on the food waste, I came up with goals and objectives for the app.</p>

  <h2 id="headlines">Main goal</h2>
  <p id="paragraphs">To develop a highly visual recipe-sharing app targeted for cooks of all
levels, with a slight more focus on beginner cooks.
With the help of instructions in the form of both text and photos, users would be able to cook easily and enjoyably.</p>

<h2 id="headlines">Subgoals</h2>

<div id="subgoals">

  <div>
    <h3>TO MAKE THE COOKING PROCESS EASIER, ESPECIALLY FOR BEGINNER COOKS</h3>
      <h4>Objectives:</h4>
        <ul>
          <li>100% of the recipes include step-by-step instructions</li>
          <li>recipes can be sorted by difficulty level, so that users can filter them more easily</li>
          <li>user testing will be conducted to see if more than 85% of users can complete the recipe</li>
          <li>more than 50% of the recipes will be categorised as easy to cater to beginners</li>
        </ul>
  </div>

  <div>
    <h3>TO EVOKE INTEREST FOR HOME-COOKING</h3>
      <h4>Objectives:</h4>
        <ul>
          <li>100% of recipes will include photos</li>
          <li>based on algorithms and user’s interest, app will automatically suggest recipes user might be interested in</li>
        </ul>
  </div>

  <div>
    <h3>TO HELP USERS SAVE TIME  BY PLANNING THEIR MEALS AHEAD</h3>
      <h4>Objectives:</h4>
        <ul>
          <li>each user should have the option to
             save a recipe for later, and to make a grocery list of ingredients the user needs to buy</li>
          <li>it will be determined which factor is the most important
             for users when they search for recipes so that search results can be adjusted accordingly</li>
        </ul>
  </div>

  <div>
    <h3>TO HELP USERS SAVE MONEY AND REDUCE FOOD WASTE BY USING INGREDIENTS THEY HAVE IN THE FRIDGE</h3>
      <h4>Objectives:</h4>
        <ul>
          <li>all users will have the option to enter ingredients
             they already have in the fridge and get recipes that include those ingredients</li>
        </ul>
  </div>

  <div>
    <h3>TO BUILD A TRUSTWORTHY COMMUNITY</h3>
      <h4>Objectives:</h4>
        <ul>
          <li>have at least 70% of users that try a recipe post a photo, rate the recipe or leave a review</li>
          <li>all users will have the option to create their own recipes and publish them</li>
          <li>all users will have the option to leave reviews, rate recipes or leave a rating</li>
        </ul>
  </div>

</div>

<h2 id="headlines">Persona</h2>
<p id="paragraphs">After deciding on the goals and objectives, I created a persona to represent the main target audience.</p>

<div class="persona"><img src="./img/persona1.png" alt=""></div>

<h2 id="headlines">User flow</h2>
<p id="paragraphs">Before moving on to wireframes and the prototype, to help with the logic 
  of the user interface and to make relationships between elements in the screens more clear, 
  I decided to create a user flow.
Use models help us understand user’s mental models about how they would use our product.
My final user flow was very complicated, so here is a snippet of the final flow.
</p>
<p id="paragraphs" style="margin:1%">Complete user flow can be accessed here: </p>
<div class="link-container"><a class="user-flow-link" href="https://app.flowmapp.com/share/07e08e90dba339b52ca0a882ea2caf9a/userflow/89255/" target="_blank">Complete user flow</a></div>
<figure><img src="./img/zoomin.jpg" alt=""><figcaption>A snippet of the user flow.</figcaption></figure>

<h2 id="headlines">Low-fidelity prototypes</h2>
<p id="paragraphs">Using low-fidelity prototypes that I presented to my classmates to receive feedback, 
  the goal was to see what has to be improved and changed before making high-fidelity prototypes. 
  Potential users gave great feedback related to image size, element visibility such as internal nav 
  within recipe details page, organization and information architecture.
   This valuable feedback enabled me to iterate on the design for the high-fidelity prototype.
</p>
<div id="low-fi">
<img class="low-fi" src="./img/low-fi.png" alt="">
</div>

<h2 id="headlines">User feedback</h2>
<p id="paragraphs">I have presented these low-fidelity prototypes to my classmates and other potential users
  to improve the design before making the "final" design. 
  Naturally, the main rule of UI and UX design is iterate, iterate and iterate again so 
  these high-fidelity wireframes have to be constantly tested and revised.
</p>
<p id="paragraphs">This is the initial user feedback I received and used to make improvements.
</p>

<img class="feedback" src="./img/feedback.png" alt="">

<h2 id="headlines">High-fidelity prototypes</h2>
<p id="paragraphs">Things that were improved using the feedback provided in classroom.
</p>
<div id="improved">
<ul>
  <li>Navigation changed to be clearer.</li>
  <li>Images on the homepage enlarged so that they take up the whole screen.</li>
  <li>Tab navigations inside recipe details page was made more visible.</li>
  <li>Added the sort by option and simplified the filtering page.</li>
</ul>
</div>

<div id="prototypes">
  <div id="screen-info">
  <h2 id="number">01</h2>
  <h3 id="screen-description">Homepage</h3>
  <p id="screen-text">Homepage shows categories such as recommended recipes based on things you searched for,
top and trending recipes, or recipes from categories you recently searched for such as one-pot meals etc.</p>
  </div>
  <img src="./img/homepage1.gif" alt="">
</div>

<div id="prototypes">
  <div id="screen-info">
  <h2 id="number">02</h2>
  <h3 id="screen-description">Search function</h3>
  <p id="screen-text">Search page gives the user two options. One is to scroll down and see some of the featured 
    categories, and the other one is to enter a keyword and search according to that. 
    Before clicking search, users can see suggested recipes and keywords.</p>
  </div>
  <img src="./img/search.gif" alt="">
</div>

<div id="prototypes">
  <div id="screen-info">
  <h2 id="number">03</h2>
  <h3 id="screen-description">Filter and sort</h3>
  <p id="screen-text">Results can be filtered according to difficulty level, cooking time and special dietary needs. They can also be sorted according to difficulty,
      time and number of ingredients. This enables uses to quickly filter to recipes and spend less time searching.</p>
  </div>
  <img src="./img/filter.gif" alt="">
</div>

<div id="prototypes">
  <div id="screen-info">
  <h2 id="number">04</h2>
  <h3 id="screen-description">Recipe details page</h3>
  <p id="screen-text">On the recipe details page, users can see recipe’s rating, author, cooking time, difficulty and tags. They can also like the recipe to save it for later. Furthermore, they can see ingredients, directions and reviews.
Serving size can also be adjusted to fit users’ needs and the ingredients amounts will get increased or decreased accordingly.</p>
  </div>
  <img src="./img/recipedetailspage.gif" alt="">
</div>

<div id="prototypes">
  <div id="screen-info">
  <h2 id="number">05</h2>
  <h3 id="screen-description">Making a recipe</h3>
  <p id="screen-text">From the recipe details page, users can access the recipe making mode. 
    Before they start they will get a prompt window asking them whether they want to enable 
    anti-lock screen and voice control. These features make it easier to follow a recipe without touching the 
    phone all the time. Next, they can follow instructions step-by-step. In the end they’ll be asked to leave a review, 
    rate the recipe or upload a photo.</p>
  </div>
  <img src="./img/makingrecipe.gif" alt="">
</div>

<div id="prototypes">
  <div id="screen-info">
  <h2 id="number">06</h2>
  <h3 id="screen-description">Grocery list</h3>
  <p id="screen-text">After looking at the ingredients list, if a user realizes they are missing an ingredient they can add it to the grocery list to buy it later.
     From the grocery list they can delete ingredients or access the recipe again.</p>
  </div>
  <img src="./img/grocery.gif" alt="">
</div>

<div id="prototypes">
  <div id="screen-info">
  <h2 id="number">07</h2>
  <h3 id="screen-description">Clean your fridge</h3>
  <p id="screen-text">Users can select the ingredients they already have in the fridge and search
     for recipes that have same ingredients to use them up instead of throwing them away.</p>
  </div>
  <img src="./img/cleanfridge.gif" alt="">
</div>

<div id="prototypes">
  <div id="screen-info">
  <h2 id="number">08</h2>
  <h3 id="screen-description">Profile page</h3>
  <p id="screen-text">Users can like a recipe to save it for later. Saved recipes appear on the users profile page, 
    along with the recipes users published or recipes they tried making before.</p>
  </div>
  <img src="./img/profile.gif" alt="">
</div>

<h2 id="headlines">Takeaways</h2>

<h3 class="improved2-text">What did I learn?</h3>
<div id="improved2">
<ul>
  <li>Iterate, iterate and iterate. It is important to keep testing the design and making changes accordingly. 
    Even after the product is launched, the team should keep testing it and improving it.</li>
  <li>Don’t make assumptions. I made the low-fidelity wireframes based on my idea of what users might like,
     but after getting feedback from classmates it turns out that they might prefer some other solution.</li>
  <li>Ask for advice. If you get stuck on any step of the process, 
    it is always helpful to ask for second opinion either from colleagues or from a mentor.</li>
</ul>
</div>

<h3 class="improved2-text">What are the next steps?</h3>

<div id="improved2">
<ul>
  <li>More user testing is needed to improve the design, 
    make it more beginner-friendly and see how it can attract more users with new functions.</li>
  <li>Develop the prototype further and include more functions. </li>
  <li>Work more on branding and establish business goals.</li>
</ul>
</div>

<h2 id="headline-final">See other projects</h2>
<ul class="other-projects">
  <li><a href="">Plant care app (UI/UX)</a></li>
  <li><a href="">Travel blog (Front-end)</a></li>
</ul>
    
<div class="footer">&#169 Copyright 2020. Designed and coded by Petra. 🐶 <a href="https://github.com/petra-stef/portfolio" target="_blank" rel="noopener noreferrer">Github</a></div>

</body>

</html>