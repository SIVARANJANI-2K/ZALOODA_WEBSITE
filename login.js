  import { initializeApp } from "https://www.gstatic.com/firebasejs/11.8.1/firebase-app.js";
  import { getAuth, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/11.8.1/firebase-auth.js";
 
  const firebaseConfig = {
    apiKey: "AIzaSyBXjrhPL_xieq69Dko4E2kJTTA_5ZP1OMs",
    authDomain: "zalooda.firebaseapp.com",
    projectId: "zalooda",
    storageBucket: "zalooda.firebasestorage.app",
    messagingSenderId: "628915668051",
    appId: "1:628915668051:web:cd7882a4a638d441c072a6"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);

  //inputs
  const submit = document.getElementById("login");
  submit.addEventListener("click", function(event){
    event.preventDefault();
    
    const email = document.getElementById("email").value;
    const password = document.getElementById("lock").value;

    //alert(5);
    signInWithEmailAndPassword(auth, email, password)
    .then((userCredential) => {
        // Signed in 
        const user = userCredential.user;
        window.location.href = "index.html";
        // ...
    })
    .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;
        alert("First, you need to register dingus!!!!");
    });
    
  })