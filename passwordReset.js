  import { initializeApp } from "https://www.gstatic.com/firebasejs/11.8.1/firebase-app.js";
  import { getAuth, sendPasswordResetEmail } from "https://www.gstatic.com/firebasejs/11.8.1/firebase-auth.js";
 
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
  const submit = document.getElementById("reset");
  submit.addEventListener("click", function(event){
    event.preventDefault();
    
    const  email = document.getElementById("email").value;
    sendPasswordResetEmail(auth, email)
    .then(() => {
        // Password reset email sent!
        // ..
        alert("Password reset email sent!");
    })
    .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;
        // ..
    });

  })