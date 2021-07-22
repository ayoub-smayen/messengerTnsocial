

{% extends "users/base.html" %}
{% block content %}
{% load static %}



<html>
    <head>
        <title></title>

        <style>
        #main {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  margin-top: 50px;
}

#header {
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

#header,
#navbar,
#navbar ul {
  position: fixed;
  z-index: 9999;
  top: 0;
  background: rgb(249, 239, 175);
  height: 50px;
  width: 100%;
  font-family: "Lato", Helvetica, Arial, sans-serif;
  font-weight: bold;
}

#navbar ul {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  list-style: none;
  margin: 0;
  padding: 0;
  overflow-y: hidden;
}

#navbar li {
  padding: 20px;
  margin: 0;
  box-sizing: border-box;
  text-transform: uppercase;
  cursor: pointer;
  user-select: none;
}

#navbar li:hover {
  padding: 20px;
  margin: 0;
  box-sizing: border-box;
  overflow-y: hidden;
  background: white;
}

#how-it-works {
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  display: none;
  font-family: "Lato", Helvetica, Arial, sans-serif;
  position: fixed;
  z-index: 9999;
  width: 100%;
}

#how-it-works ul {
  list-style: none;
  padding: 20px;
  margin: 0;
  line-height: 2;
  box-sizing: border-box;
  background-color: rgb(241, 241, 241);
}

#how-it-works li:not(:first-child) {
  margin-top: 15px;
}

#how-it-works strong {
  text-transform: uppercase;
}

#how-it-works p {
  margin: 0;
}

#how-it-works .fas {
  width: 25px;
  text-align: center;
}

.sticky {
  font: 20px "Short Stack", "Gloria Hallelujah", cursive;
  line-height: 1.5;
  border: 0;
  border-radius: 3px;
  background: linear-gradient(rgb(249, 239, 175), rgb(247, 233, 141));
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  width: 270px;
  min-height: 250px;
  margin: 30px;
  transition: 0.3s;
  float: left;
  display: none;
  vertical-align: top;
}

.sticky:hover {
  transform: scale(1.05);
  box-shadow: 0 5px 8px rgba(0, 0, 0, 0.15);
}

.sticky-content::-webkit-scrollbar {
  width: 10px;
}

.sticky-content::-webkit-scrollbar-track {
  background: #f1f1f1;
}

.sticky-content::-webkit-scrollbar-thumb {
  background: #888;
}

.sticky-content::-webkit-scrollbar-thumb:hover {
  background: #555;
}

.sticky:nth-child(even) {
  transform: rotate(2deg);
}

.sticky:nth-child(odd) {
  transform: rotate(-1.5deg);
}

.sticky-header {
  height: 30px;
  width: inherit;
  background: rgba(0, 0, 0, 0.1);
  display: flex;
  justify-content: flex-end;
  align-items: center;
  overflow: hidden;
}

.sticky-header-menu {
  font-weight: bold;
  padding: 10px 15px;
  box-sizing: border-box;
  display: block;
  width: 50px;
  text-align: center;
  cursor: pointer;
  position: relative;
}

.sticky-header-menu:hover {
  background-color: rgba(0, 0, 0, 0.1);
}

.sticky-content {
  padding: 10px 10px 0 10px;
  overflow-y: auto;
  width: 270px;
  min-height: 250px;
  box-sizing: border-box;
  border: 0;
  resize: vertical;
  background-color: transparent;
  display: block;
  cursor: default;
}

.sticky-content:focus {
  outline: none;
}

#createStickyBtn {
  float: left;
  display: none;
  padding: 25px 25px 40px;
  margin: 30px;
  width: 270px;
  height: 270px;
  user-select: none;
  padding: 20px;
  border-radius: 20px;
  text-align: center;
  border: 15px solid rgba(0, 0, 0, 0.1);
  cursor: pointer;
  color: rgba(0, 0, 0, 0.1);
  font: 220px "Helvetica", sans-serif;
  line-height: 185px;
  box-sizing: border-box;
  vertical-align: top;
}

#createStickyBtn:hover {
  border-color: rgba(0, 0, 0, 0.2);
  color: rgba(0, 0, 0, 0.2);
}

.dropdown-content-hide {
  display: none;
  position: absolute;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
  top: 30px;
  left: 0;
  width: 270px;
  box-sizing: border-box;
  justify-content: space-between;
}

.dropdown-content-show {
  top: 30px;
  left: 0;
}

.dropdown-content-hide div {
  padding: 14px 14px;
  flex: 1;
}

.pink-color {
  background: linear-gradient(rgb(250, 214, 231), rgb(236, 185, 209));
}

.blue-color {
  background: linear-gradient(rgb(175, 249, 238), rgb(150, 226, 214));
}

.green-color {
  background: linear-gradient(rgb(178, 249, 175), rgb(152, 228, 149));
}

.yellow-color {
  background: linear-gradient(rgb(249, 239, 175), rgb(247, 233, 141));
}

.purple-color {
  background: linear-gradient(rgb(218, 215, 250), rgb(197, 194, 232));
}

.drop-button {
  margin-left: auto;
}

.notSaved {
  display: none;
}

.notSaved:hover {
  background-color: transparent;
  cursor: auto;
}

@media (max-width: 1024px) {
  .sticky {
    line-height: 1.2;
    width: 200px;
    min-height: 180px;
    margin: 20px;
  }

  .sticky-content {
    width: 200px;
    min-height: 170px;
    font-size: 16px;
  }

  .dropdown-content-hide {
    width: 200px;
  }

  #createStickyBtn {
    margin: 20px;
    width: 200px;
    height: 180px;

    padding: 0;
    line-height: 150px;
  }

  #header,
  #how-it-works {
    font-size: 14px;
  }
}

@media (max-width: 720px) {
  .sticky {
    line-height: 1.2;
    width: 130px;
    min-height: 145px;
    margin: 15px;
  }

  .sticky-content {
    width: 130px;
    min-height: 115px;
    font-size: 14px;
  }

  .dropdown-content-hide {
    width: 130px;
  }

  .dropdown-content-hide div {
    padding: 10px 10px;
  }

  #createStickyBtn {
    margin: 15px;
    width: 140px;
    height: 140px;
    padding: 0;
    font: 90px "Helvetica", sans-serif;
  }

  #header,
  #how-it-works {
    font-size: 12px;
  }
  #how-it-works {
    top: 30px;
  }
  .sticky-header-menu {
    padding: 0 10px 0 0;
    width: 25px;
    margin: 0 3px;
  }

  .drop-button {
    margin-left: auto;
  }

  .sticky-header {
    justify-content: space-around;
  }

  #header,
  #navbar,
  #navbar ul {
    height: 30px;
  }
}

            h1{margin:0; color:#ddd; padding:10px; border-bottom:1px solid #666}
button:focus{outline:none}
  aside{background:#1a1d23; width:250px;height:100vh; position:fixed; transition:.3s;left:-250px;top:0;transition-timing-function: cubic-bezier(0.9,0,1,1);}
aside.close{left:0;transition:.3s;transition-timing-function: cubic-bezier(0.9,0,1,1);}
nav a{display: block; color:#ddd; text-decoration:none;padding:10px}
nav a:hover{background:#313640}
aside button{border:none; background:none; position: absolute;right:-40px; top:7px; font-size:30px; transform:rotate(90deg); display:inline-block; cursor:pointer}
        </style>

        <script>
            $(document).ready(function(){
  $(".toggle").click(function(){
    $("aside").toggleClass("close")
  });
 });

// click outside
$(document).mouseup(function(e){
  var container = $("aside");
    if (!container.is(e.target) && container.has(e.target).length === 0)
    {
         $("aside").removeClass("close")
    }
});

        </script>
    </head>
</html>



<header></header>
<div class="container">
<aside>
  <button class="toggle">|||</button>
  <h1>Menu</h1>
  <nav>
      <li id="how-it-works-btn">How it works</li>
        <li id="deleteAll">Delete all</li>
    <a href="/">Home</a>
    <a href="http://elmeriyu.pythonanywhere.com/" taget="_blank">tn-socialcamp</a>
    <a href="http://bootcampyub.pythonanywhere.com/" target="_blank">Tn-ServicesCam</a>
    <a href="https://tweetayoub.pythonanywhere.com/" target="_blank">Tn-tweetsCamp</a>
    <a href="https://shopfood1.pythonanywhere.com/" target="_blank">Tn-foodCampOrder</a>
     <a href="http://ayubchatty.pythonanywhere.com/" target="_blank">Tn-roomchatCamp</a>

       <a  href="http://cvbgchatt.pythonanywhere.com/" target="_blank"> see more </a>
  </nav>
</aside>

<p>save your note here</p>
  <div id="how-it-works">
    <ul>
      <li>
        <p><strong>How stickies are stored :</strong> stickies are saved to browser local storage. You can close the tab, or the browser and the stickies will be rememebered. Deleting browser history however, will remove them.</p>
      </li>
      <li>
        <p><strong>Create sticky :</strong> click on the <span class="fas fa-plus"></span> buttons to create new sticky.</p>
      </li>
      <li>
        <p><strong>Type in sticky :</strong> when you type inside a sticky, the <span class="fas fa-check"></span> icon will be red. When the icon is red the information is not yet saved.</p>
      </li>
      <li>
        <p><strong>Save sticky text :</strong> click anywhere outside the sticky's text area to save sticky. When text is saved, the <span class="fas fa-check"></span> icon turns black.</p>
      </li>
      <li>
        <p><strong>Change sticky color :</strong> click on the <span class="fas fa-paint-brush"></span> icon to change sticky color. Colors are saved automatically if there is text in a sticky.</p>
      </li>
      <li>
        <p><strong>Stickies from storage :</strong> items not showing the <span class="fas fa-check"></span> are retrieved from storage. They can be changed/deleted as per normal rules</p>
      </li>
      <li>
        <p><strong>Delete sticky :</strong> click on the <span class="fas fa-trash-alt"></span> icon to delete sticky.</p>
      </li>
      <li>
        <p><strong>Delete all stickies :</strong> DELETE ALL button deletes all stickies from your browser's memory/local storage.</p>
      </li>
      <li>
        <p><strong>Caution :</strong> Both DELETE ALL and <span class="fas fa-trash-alt"></span> actions are permanent and cannot be undone</p>
      </li>
    </ul>
  </div>
  <main id="main">
    <div class="sticky">
      <div class="sticky-header">
        <span class="sticky-header-menu add-button fas fa-plus" title='new sticky'></span>
        <span class="sticky-header-menu notSaved fas fa-check" title='not saved'></span>
        <span class="sticky-header-menu drop-button fas fa-paint-brush" title='change color'></span>
        <div class="dropdown-content-hide">
          <div class="pink-color"></div>
          <div class="yellow-color"></div>
          <div class="green-color"></div>
          <div class="blue-color"></div>
          <div class="purple-color"></div>
        </div>
        <span class="sticky-header-menu remove-button fas fa-trash-alt" title='delete sticky'></span>
      </div>
      <textarea class="sticky-content">
        </textarea>
    </div>
    <div id="createStickyBtn">+</div>
  </main>

  </div>
<script>
    window.onload = function() {
  loadStartEvents();

  function loadStartEvents() {
    const howItWorksBtn = document.querySelector("#how-it-works-btn");
    const deleteAllBtn = document.querySelector("#deleteAll");
    const createFirstSticky = document.querySelector("#createStickyBtn"); //for first empty existing sticky only

    document.onmouseup = hideDropMenu; //hides color menus when clicked anywhere in the page
    howItWorksBtn.onclick = toggleHowItWorks; //toggles how it works menu
    deleteAllBtn.onclick = deleteAllStickies; //deletes all stickies from dom and storage
    createFirstSticky.onclick = createId; //creates the first sticky, and hides the initial add button

    let isStorageEmpty = getStoredStickies(createFirstSticky); //retrieves data from local storage, and recreates stored stikies
  }

  function hideDropMenu(e) {
    //hides color menus when clicked anywhere in the page
    let stickies = Array.from(document.querySelectorAll(".sticky"));
    let stickiesIdArray = stickies.map(el => el.id).filter(el => el); //get array of all sticky ids, if they exist

    for (let i = 0; i < stickiesIdArray.length; i++) {
      let dropContent = document.querySelector(
        `#${stickiesIdArray[i]} .dropdown-content-hide`
      );
      let dropButton = document.querySelector(
        `#${stickiesIdArray[i]} .drop-button`
      );
      if (dropContent != e.target.parentNode && dropButton != e.target) {
        dropContent.style.display = "none";
      }
    }
  }

  function toggleHowItWorks() {
    //toggles how it works menu
    let howItWorksDiv = document.querySelector("#how-it-works");
    howItWorksDiv.style.display != "block"
      ? (howItWorksDiv.style.display = "block")
      : (howItWorksDiv.style.display = "none");
  }

  function deleteAllStickies() {
    //deletes all stickies from dom and storage
    localStorage.clear(); //clear all from storage
    let parent = document.querySelector("#main");
    while (parent.children.length > 2) {
      //while parent still has 2 children(sticky template+initial create button)
      parent.removeChild(parent.lastChild); //remove all children from the end
    }
    document.querySelector("#createStickyBtn").style.display = "block"; //and show initial create button
  }

  function getStoredStickies(createFirstSticky) {
    //retrieves data from local storage, and recreates stored stikies
    let stickiesArray = getStickiesArray(); //get the stickiesArray from storage, which contains all the keys used by the program

    if (stickiesArray.length > 0) {
      //if there were items in storage, hide the inital create button
      createFirstSticky.style.display = "none";
    } else {
      createFirstSticky.style.display = "block";
    }

    for (let i = 0; i < stickiesArray.length; i++) {
      //using the keys stored in the array, get all the stored sticky objects
      let key = stickiesArray[i];
      let stickyObject = JSON.parse(localStorage[key]);
      addStoredStickiesToDom(stickyObject, key); //call func that handles the creation of elements for the stored objects
    }
  }

  function getStickiesArray() {
    "use strict";
    let stickiesArray = localStorage.getItem("stickiesArray");

    if (!stickiesArray) {
      //if no item in storage yet, returns null
      stickiesArray = []; //so i create an new empty array
      localStorage.setItem("stickiesArray", JSON.stringify(stickiesArray)); //and I store a new key stickiesArray that has as value a JSON string array copy of stickiesArray
    } else {
      stickiesArray = JSON.parse(stickiesArray); //else we found an array of keys, and we parse it to get an actual array
    }
    return stickiesArray; //which we return to the calling stack
  }

  function addStoredStickiesToDom(stickyObject, key) {
    // handles the creation of elements for the stored objects
    let stickyClone = setIdToStoredObjects(key); //asks for dom sticky to be created and sets their key as id
    Array.from(stickyClone.children).filter(
      el => el.className == "sticky-content"
    )[0].value =
      stickyObject.value; //adds stored value to new element
    stickyClone.style.backgroundImage = stickyObject.color; //adds stored color to new element
  }

  function setIdToStoredObjects(key) {
    //asks for dom sticky to be created and sets their key as id
    let stickyClone = createSticky(); //create actual dom sticky
    if (key) {
      stickyClone.setAttribute("id", key); //for all the already stored items, set ID=stored key. else no id new sticky is created
    }
    return stickyClone; //returns created element to calling stack
  }

  function createSticky() {
    let parent = document.querySelector("#main");
    let sticky = document.querySelector(".sticky");
    let stickyClone = sticky.cloneNode(true); //creates a clone from sticky div template
    parent.appendChild(stickyClone);
    stickyClone.style.display = "block";

    let newAddBtn = Array.from(
      Array.from(stickyClone.children).filter(
        el => el.className == "sticky-header"
      )[0].children
    ).filter(el => el.classList.contains("add-button"))[0];
    newAddBtn.onclick = createId; //adds createID handler to new dom sticky

    let removeBtn = Array.from(
      Array.from(stickyClone.children).filter(
        el => el.className == "sticky-header"
      )[0].children
    ).filter(el => el.classList.contains("remove-button"))[0];
    removeBtn.onclick = deleteSticky; //adds delete sticky handler to new dom sticky

    let dropBtn = Array.from(
      Array.from(stickyClone.children).filter(
        el => el.className == "sticky-header"
      )[0].children
    ).filter(el => el.classList.contains("drop-button"))[0];
    dropBtn.onclick = toggleDropMenuClick; //adds color dropdown toggle handler to new dom sticky

    let dropMenus = Array.from(
      document.querySelectorAll(".dropdown-content-hide")
    );
    for (let dropMenu of dropMenus) {
      dropMenu.onclick = changeColor; //adds changeColor handler to color dropdown menu
    }

    let stickyCloneContent = Array.from(stickyClone.children).filter(
      el => el.className == "sticky-content"
    )[0];
    stickyCloneContent.value = ""; //new clone has no text on creation

    stickyCloneContent.onchange = storeSticky; //when sticky text is changed, save content to storage
    stickyCloneContent.oninput = notSavedNotification; //when new text is being writtern, show not saved notification

    return stickyClone;
  }

  function createId(e) {
    //creates unique IDs for dom sticky
    if (e.target.id == "createStickyBtn") {
      //if triggered by first button, then hide that button
      e.target.style.display = "none";
    }

    let currentDate = new Date();
    let key = "sticky_" + currentDate.getTime();

    let stickyClone = createSticky();
    stickyClone.setAttribute("id", key);
  }

  function deleteSticky(e) {
    const createFirstSticky = document.querySelector("#createStickyBtn");
    const main = document.querySelector("#main");
    let key = e.target.parentNode.parentNode.id; //using sticky id as key for storage removal

    localStorage.removeItem(key); //remove key from storage

    let stickiesArray = getStickiesArray(); //remove key from stikie array
    if (stickiesArray) {
      for (let i = 0; i < stickiesArray.length; i++) {
        if (key == stickiesArray[i]) {
          stickiesArray.splice(i, 1);
        }
      }
      localStorage.setItem("stickiesArray", JSON.stringify(stickiesArray));
    }

    removeStickyFromDOM(key); //remove sticky from dom

    if (stickiesArray.length > 0 || main.children.length > 2) {
      //show createFirst button
      createFirstSticky.style.display = "none";
    } else {
      createFirstSticky.style.display = "block";
    }
  }

  function removeStickyFromDOM(key) {
    var sticky = document.getElementById(key);
    sticky.parentNode.removeChild(sticky);
  }

  function toggleDropMenuClick(e) {
    //toggle color menu on click
    let parentId = e.target.parentNode.parentNode.id;
    let stickyContent = document.querySelector(`#${parentId} .sticky-content`);
    let dropMenu = document.querySelector(
      `#${parentId} .dropdown-content-hide`
    );
    dropMenu.style.display != "flex"
      ? (dropMenu.style.display = "flex")
      : (dropMenu.style.display = "none");
  }

  function changeColor(e) {
    let colorBtn = e.target;
    let sticky = e.target.parentNode.parentNode.parentNode;
    let key = sticky.id;
    let newColor = getComputedStyle(colorBtn).backgroundImage;
    let stickyObject = JSON.parse(localStorage.getItem(key));

    sticky.style.backgroundImage = newColor;
    if (stickyObject) {
      stickyObject.color = newColor;
      localStorage.setItem(key, JSON.stringify(stickyObject));
    }
  }

  function storeSticky(e) {
    let stickiesArray = getStickiesArray(); //get array of keys from storage, and add new keys to it
    let sticky = e.target.parentNode;

    let key = sticky.id; //for all items, set as key their ID
    let stickyContent = e.target.value;

    let oldColor = getComputedStyle(sticky).backgroundImage;
    let stickyObject = {
      value: stickyContent,
      color: oldColor
    };

    localStorage.setItem(key, JSON.stringify(stickyObject)); //store textarea value+color in localstorage

    if (!stickiesArray.includes(key)) {
      stickiesArray.push(key); //and save this key/id to the stickie array, if it doesn't already exist
      localStorage.setItem("stickiesArray", JSON.stringify(stickiesArray)); //store the new array key items int he stickiesarray
    }

    let notSaved = document.querySelector(`#${key} .notSaved`);
    notSaved.style.display = "inline-block";
    notSaved.style.color = "black";
    notSaved.title = "saved";
  }

  function notSavedNotification(e) {
    let stickyId = e.target.parentNode.id;
    let notSaved = document.querySelector(`#${stickyId} .notSaved`);
    notSaved.style.display = "inline-block";
    notSaved.style.color = "red";
    notSaved.title = "not saved";
  }
};

</script>
 {% endblock%}