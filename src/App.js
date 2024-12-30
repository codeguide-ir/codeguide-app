import React from "react";
import axios from "axios";

export default function App() {
  axios.get("/index.php")
  .then((response) => {
    console.log(response.data);
  })
  .catch((error) => {
    if (error.response) {
      console.error('Error Response:', error.response.data);
    } else if (error.request) {
      console.error('Error Request:', error.request);
    } else {
      console.error('Error Message:', error.message);
    }
  })
}