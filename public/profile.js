  import { initializeApp } from "https://www.gstatic.com/firebasejs/11.8.1/firebase-app.js";
  import { getAuth, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/11.8.1/firebase-auth.js";
 
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
  const user = auth.currentUser;

  function updateUserProfile(user){
    const userName = user.displayName || "Azhagaaaa";
    const userEmail = user.email || "No email";
    const userPhoto = user.photoURL || "assets/default-photo.jpg"; // Provide a fallback image

    document.getElementById("userName").textContent = userName;
    document.getElementById("userEmail").textContent = userEmail;
    document.getElementById("userPhoto").src = userPhoto;
  }

  //inputs
  onAuthStateChanged(auth, (user) => {
  if (user) {
     updateUserProfile(user);
     const uid = user.uid;
     return uid;
  } else {
    alert("Create Account and login");
    window.location.href = "login.html";
  }
});