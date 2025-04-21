

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
  <title>404page</title>
  
  
  
  
<style>
@import url("https://fonts.googleapis.com/css?family=Special+Elite");
.main-wrapper {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.error {
  margin: 10px auto 0;
  display: flex;
  display: -ms-flexbox;
  display: -webkit-box;
  display: -webkit-flex;
  -ms-flex-pack: justify;
  -webkit-box-pack: justify;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  -o-justify-content: center;
  justify-content: center;
  align-items: baseline;
  height: 230px;
  width: 500px;
}
.error__num {
  color: #fff;
  font-size: 200px;
  margin: 0;
}
.error__moon {
  position: relative;
  width: 200px;
  height: 200px;
  background-color: #f0db90;
  border-radius: 50%;
  box-shadow: 0 0 10px #ffffff, 0 0 0 2px rgba(143, 101, 169, 0.1);
  -webkit-box-shadow: 0 0 10px #ffffff, 0 0 0 2px rgba(143, 101, 169, 0.1);
}

.house {
  width: 220px;
  height: 215px;
  position: absolute;
  bottom: 4px;
  overflow: hidden;
  z-index: 0;
  -webkit-transform: rotate(-10deg);
  -moz-transform: rotate(-10deg);
  -ms-transform: rotate(-10deg);
  -o-transform: rotate(-10deg);
  transform: rotate(-10deg);
}
.house__window {
  position: absolute;
  background-color: #f6e833;
  z-index: 10;
  -webkit-animation: window 3s linear infinite;
  -moz-animation: window 3s linear infinite;
  animation: window 3s linear infinite;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  animation-fill-mode: both;
}
.house__window:before, .house__window:after {
  background-color: #f6e833;
  -webkit-animation: window 3s linear infinite;
  -moz-animation: window 3s linear infinite;
  animation: window 3s linear infinite;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  animation-fill-mode: both;
}
.house__right {
  position: absolute;
  bottom: 0;
  left: 153px;
  width: 27px;
  height: 100px;
  background-color: #000;
  -webkit-transform: rotate(23deg);
  -moz-transform: rotate(23deg);
  -ms-transform: rotate(23deg);
  -o-transform: rotate(23deg);
  transform: rotate(23deg);
}
.house__right:before {
  top: -35px;
  right: -19px;
  width: 0;
  height: 0;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  border-bottom: 36px solid #000;
  -webkit-transform: rotate(-5deg);
  -moz-transform: rotate(-5deg);
  -ms-transform: rotate(-5deg);
  -o-transform: rotate(-5deg);
  transform: rotate(-5deg);
}
.house__right:after {
  top: -1px;
  right: -12px;
  width: 0;
  height: 0;
  border-right: 15px solid transparent;
  border-top: 100px solid #000;
  -webkit-transform: rotate(-4deg);
  -moz-transform: rotate(-4deg);
  -ms-transform: rotate(-4deg);
  -o-transform: rotate(-4deg);
  transform: rotate(-4deg);
}
.house__right .house__window {
  width: 10px;
  height: 10px;
  position: absolute;
  left: 12px;
}
.house__right .house__window:after {
  width: 8px;
  height: 12px;
  left: 1px;
  top: 17px;
}
.house__center {
  position: absolute;
  bottom: 61px;
  left: 118px;
  width: 27px;
  height: 100px;
  transform: rotate(-3deg);
  background-color: #000;
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  transform: rotate(-3deg);
}
.house__center .house__window {
  -webkit-transform: rotate(4deg);
  -moz-transform: rotate(4deg);
  -ms-transform: rotate(4deg);
  -o-transform: rotate(4deg);
  transform: rotate(4deg);
}
.house__center .house__window:first-of-type {
  width: 8px;
  height: 10px;
  position: absolute;
  top: 6px;
  left: 12px;
}
.house__center .house__window:first-of-type:after {
  width: 8px;
  height: 12px;
  left: 1px;
  top: 17px;
}
.house__center .house__window:nth-of-type(2) {
  left: 26px;
  width: 10px;
  height: 10px;
  position: absolute;
  top: 6px;
}
.house__center .house__window:nth-of-type(2):after {
  width: 8px;
  height: 12px;
  left: 1px;
  top: 17px;
}
.house__center:before {
  top: -53px;
  right: -27px;
  width: 0;
  height: 0;
  border-left: 33px solid transparent;
  border-right: 33px solid transparent;
  border-bottom: 54px solid #000;
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  transform: rotate(-3deg);
}
.house__center:after {
  top: -5px;
  right: -11px;
  width: 15px;
  height: 90px;
  background-color: #000;
  -webkit-transform: rotate(5deg);
  -moz-transform: rotate(5deg);
  -ms-transform: rotate(5deg);
  -o-transform: rotate(5deg);
  transform: rotate(5deg);
}
.house__left {
  position: absolute;
  bottom: 56px;
  left: 54px;
  width: 25px;
  height: 60px;
  background-color: #000;
  -webkit-transform: rotate(-11deg);
  -moz-transform: rotate(-11deg);
  -ms-transform: rotate(-11deg);
  -o-transform: rotate(-11deg);
  transform: rotate(-11deg);
}
.house__left:before {
  top: -33px;
  right: -26px;
  width: 0;
  height: 0;
  border-left: 33px solid transparent;
  border-right: 33px solid transparent;
  border-bottom: 35px solid #000;
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  transform: rotate(-3deg);
}
.house__left:after {
  top: -5px;
  right: -11px;
  width: 15px;
  height: 90px;
  background-color: #000;
  -webkit-transform: rotate(5deg);
  -moz-transform: rotate(5deg);
  -ms-transform: rotate(5deg);
  -o-transform: rotate(5deg);
  transform: rotate(5deg);
}
.house__left .house__window:first-of-type {
  width: 6px;
  height: 10px;
  position: absolute;
  top: 6px;
  left: 12px;
}
.house__left .house__window:first-of-type:after {
  width: 6px;
  height: 12px;
  left: 1px;
  top: 17px;
}
.house__left .house__window:nth-of-type(2) {
  left: 26px;
  width: 6px;
  height: 12px;
  position: absolute;
  top: 6px;
}
.house__left .house__window:nth-of-type(2):after {
  width: 6px;
  height: 12px;
  left: 0;
  top: 17px;
}
.house__mini {
  position: absolute;
  bottom: 52px;
  left: 25px;
  width: 14px;
  height: 35px;
  background-color: #000;
  -webkit-transform: rotate(-21deg);
  -moz-transform: rotate(-21deg);
  -ms-transform: rotate(-21deg);
  -o-transform: rotate(-21deg);
  transform: rotate(-21deg);
}
.house__mini:before {
  top: -25px;
  right: -9px;
  width: 0;
  height: 0;
  border-left: 17px solid transparent;
  border-right: 17px solid transparent;
  border-bottom: 26px solid #000;
  -webkit-transform: rotate(1deg);
  -moz-transform: rotate(1deg);
  -ms-transform: rotate(1deg);
  -o-transform: rotate(1deg);
  transform: rotate(1deg);
}
.house__mini:after {
  top: -3px;
  right: -1px;
  width: 8px;
  height: 37px;
  background-color: #000;
  -webkit-transform: rotate(6deg);
  -moz-transform: rotate(6deg);
  -ms-transform: rotate(6deg);
  -o-transform: rotate(6deg);
  transform: rotate(6deg);
}
.house__mini .house__window {
  width: 7px;
  height: 8px;
  position: absolute;
  left: 4px;
  top: 3px;
}
.house__mini .house__window:after {
  width: 5px;
  height: 6px;
  left: 1px;
  top: 13px;
}
.house__mini .bridge {
  position: absolute;
  bottom: -11px;
  left: 11px;
  width: 14px;
  height: 35px;
  background-color: #000;
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}
.house__bottom {
  position: absolute;
  bottom: -2px;
  left: 63px;
  width: 92px;
  height: 80px;
  background-color: #000;
  -webkit-transform: rotate(-10deg);
  -moz-transform: rotate(-10deg);
  -ms-transform: rotate(-10deg);
  -o-transform: rotate(-10deg);
  transform: rotate(-10deg);
}
.house__bottom:after {
  bottom: -5px;
  left: 57px;
  width: 35px;
  height: 90px;
  background-color: #000;
  -webkit-transform: rotate(10deg);
  -moz-transform: rotate(10deg);
  -ms-transform: rotate(10deg);
  -o-transform: rotate(10deg);
  transform: rotate(10deg);
}
.house__bottom .house__window {
  width: 26px;
  height: 34px;
  left: 39px;
  top: 30px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  -webkit-transform: rotate(10deg);
  -moz-transform: rotate(10deg);
  -ms-transform: rotate(10deg);
  -o-transform: rotate(10deg);
  transform: rotate(10deg);
}

.graves {
  width: 300px;
  height: 85px;
  position: absolute;
  bottom: -2px;
  right: 14px;
  overflow: hidden;
  z-index: 0;
}

.grave {
  position: absolute;
  width: 15px;
  height: 80px;
  background-color: #000;
  z-index: 0;
  -webkit-transform: rotate(0);
  -moz-transform: rotate(0);
  -ms-transform: rotate(0);
  -o-transform: rotate(0);
  transform: rotate(0);
  -webkit-animation: grave 3s linear 3s infinite;
  -moz-animation: grave 3s linear 3s infinite;
  animation: grave 3s linear 3s infinite;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  animation-fill-mode: both;
}
.grave:before {
  top: 5px;
  right: 0;
  width: 10px;
  height: 40px;
  background-color: #000;
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}
.grave:after {
  top: 0px;
  right: -9px;
  width: 0;
  height: 0;
  border-right: 15px solid transparent;
  border-top: 100px solid #000;
  -webkit-transform: rotate(0);
  -moz-transform: rotate(0);
  -ms-transform: rotate(0);
  -o-transform: rotate(0);
  transform: rotate(0);
}
.grave--mini {
  left: 100px;
  width: 5px;
  height: 65px;
  -webkit-animation: grave 2s linear 3s infinite;
  -moz-animation: grave 2s linear 3s infinite;
  animation: grave 2s linear 3s infinite;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  animation-fill-mode: both;
}
.grave--mini:before {
  top: 1px;
  right: -3px;
  width: 7px;
  height: 26px;
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}
.grave--mini:after {
  top: 0px;
  right: -9px;
  width: 0;
  height: 0;
  border-right: 10px solid transparent;
  border-top: 38px solid #000;
  -webkit-transform: rotate(-2deg);
  -moz-transform: rotate(-2deg);
  -ms-transform: rotate(-2deg);
  -o-transform: rotate(-2deg);
  transform: rotate(-2deg);
}
.grave:nth-of-type(1) {
  bottom: 0;
  left: 190px;
  -webkit-transform: rotate(10deg);
  -moz-transform: rotate(10deg);
  -ms-transform: rotate(10deg);
  -o-transform: rotate(10deg);
  transform: rotate(10deg);
}
.grave:nth-of-type(2) {
  bottom: -13px;
  left: 150px;
  -webkit-transform: rotate(3deg);
  -moz-transform: rotate(3deg);
  -ms-transform: rotate(3deg);
  -o-transform: rotate(3deg);
  transform: rotate(3deg);
  -webkit-animation: grave 3.5s linear 3s infinite;
  -moz-animation: grave 3.5s linear 3s infinite;
  animation: grave 3.5s linear 3s infinite;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  animation-fill-mode: both;
}
.grave:nth-of-type(3) {
  bottom: -4px;
  left: 118px;
}

.ground-wrapper {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 15px;
  background-color: #000;
  overflow: hidden;
}

.bat {
  position: absolute;
  width: 10px;
  height: 17px;
  border-radius: 40%;
  background-color: #000;
  -webkit-animation: bat 5s linear infinite alternate;
  -moz-animation: bat 5s linear infinite alternate;
  animation: bat 5s linear infinite alternate;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  animation-fill-mode: both;
}
.bat:before, .bat:after {
  width: 4px;
  height: 10px;
  top: -4px;
  right: 0;
  border-radius: 40%;
  background-color: #000;
}
.bat:after {
  left: 0;
}
.bat__right-wing {
  position: absolute;
  top: -7px;
  right: -30px;
  width: 0;
  height: 0;
  border-left: 17px solid transparent;
  border-right: 17px solid transparent;
  border-bottom: 14px solid #000;
  border-radius: 50px;
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  transform: rotate(-3deg);
  -webkit-animation: bat-right-wing 2s linear infinite alternate;
  -moz-animation: bat-right-wing 2s linear infinite alternate;
  animation: bat-right-wing 2s linear infinite alternate;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  animation-fill-mode: both;
}
.bat__right-wing:before {
  top: 9px;
  right: -4px;
  width: 0;
  height: 0;
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  border-top: 10px solid #000;
  border-radius: 50px;
  -webkit-transform: rotate(19deg);
  -moz-transform: rotate(19deg);
  -ms-transform: rotate(19deg);
  -o-transform: rotate(19deg);
  transform: rotate(19deg);
}
.bat__right-wing:after {
  top: 9px;
  right: -15px;
  width: 0;
  height: 0;
  border-left: 8px solid transparent;
  border-right: 12px solid transparent;
  border-top: 10px solid #000;
  border-radius: 50px;
  -webkit-transform: rotate(19deg);
  -moz-transform: rotate(19deg);
  -ms-transform: rotate(19deg);
  -o-transform: rotate(19deg);
  transform: rotate(19deg);
}
.bat__left-wing {
  position: absolute;
  top: -7px;
  left: -30px;
  width: 0;
  height: 0;
  border-left: 17px solid transparent;
  border-right: 17px solid transparent;
  border-bottom: 14px solid #000;
  border-radius: 50px;
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  transform: rotate(-3deg);
  -webkit-animation: bat-left-wing 2s linear infinite alternate;
  -moz-animation: bat-left-wing 2s linear infinite alternate;
  animation: bat-left-wing 2s linear infinite alternate;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  animation-fill-mode: both;
}
.bat__left-wing:before {
  top: 9px;
  left: -4px;
  width: 0;
  height: 0;
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  border-top: 10px solid #000;
  border-radius: 50px;
  -webkit-transform: rotate(-19deg);
  -moz-transform: rotate(-19deg);
  -ms-transform: rotate(-19deg);
  -o-transform: rotate(-19deg);
  transform: rotate(-19deg);
}
.bat__left-wing:after {
  top: 9px;
  left: -15px;
  width: 0;
  height: 0;
  border-left: 12px solid transparent;
  border-right: 8px solid transparent;
  border-top: 10px solid #000;
  border-radius: 50px;
  -webkit-transform: rotate(-19deg);
  -moz-transform: rotate(-19deg);
  -ms-transform: rotate(-19deg);
  -o-transform: rotate(-19deg);
  transform: rotate(-19deg);
}
.bat--left {
  top: 100px;
  left: 100px;
}
.bat--right {
  top: 150px;
  right: 100px;
}

.button-container {
  width: 100%;
}
.button-container p {
  margin-top: 20px;
  text-align: center;
  font-size: 20px;
}

.button {
     position: relative;
    display: block;
    /* width: 150px; */
    /* height: 50px; */
    margin: auto;
    text-decoration: none;
    color: black;
    text-align: center;
    font-size: 35px;
    background: linear-gradient(180deg, #265a60, #665238) fixed;
    /* padding-top: 15px;*/
}
.button:hover {
  color: #000;
  -webkit-transition: color 0.5s ease-out;
  -moz-transition: color 0.5s ease-out;
  -ms-transition: color 0.5s ease-out;
  -o-transition: color 0.5s ease-out;
  transition: color 0.5s ease-out;
}

.ghost {
  position: absolute;
  width: 40px;
  height: 45px;
  left: -50px;
  background-color: #000;
  border-top-left-radius: 40%;
  border-top-right-radius: 40%;
  border-bottom-right-radius: 40%;
  border-bottom-left-radius: 10%;
  -webkit-animation: ghost 20s linear infinite;
  -moz-animation: ghost 20s linear infinite;
  animation: ghost 20s linear infinite;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  animation-fill-mode: both;
}
.ghost__hand {
  position: absolute;
  width: 20px;
  height: 1px;
  left: 27px;
  top: 27px;
  height: 6px;
  background-color: #000;
  border-radius: 20px;
  transform: rotate(-29deg);
  -webkit-transform: rotate(-29deg);
  -moz-transform: rotate(-29deg);
  -ms-transform: rotate(-29deg);
  -o-transform: rotate(-29deg);
  transform: rotate(-29deg);
}
.ghost__hand:before {
  width: 8px;
  left: 16px;
  top: 3px;
  height: 6px;
  background-color: #000;
  border-bottom-right-radius: 5px;
  border-top-right-radius: 5px;
  -webkit-transform: rotate(49deg);
  -moz-transform: rotate(49deg);
  -ms-transform: rotate(49deg);
  -o-transform: rotate(49deg);
  transform: rotate(49deg);
}
.ghost__tail {
  border-left: 9px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 7px solid #000;
  border-radius: 30%;
  position: absolute;
  left: -8px;
  top: 34px;
  -webkit-transform: rotate(42deg);
  -moz-transform: rotate(42deg);
  -ms-transform: rotate(42deg);
  -o-transform: rotate(42deg);
  transform: rotate(42deg);
}
.ghost__face {
  position: absolute;
  top: 10px;
  right: 10px;
  width: 5px;
  height: 5px;
  background-color: #f6e833;
  border-radius: 50%;
}
.ghost__face:after {
  top: 10px;
  right: -6px;
  width: 4px;
  height: 1px;
  background-color: #f6e833;
}

@-webkit-keyframes ghost {
  0% {
    -webkit-transform: translateX(0) rotateY(0);
    -moz-transform: translateX(0) rotateY(0);
    -ms-transform: translateX(0) rotateY(0);
    -o-transform: translateX(0) rotateY(0);
    transform: translateX(0) rotateY(0);
  }
  45% {
    -webkit-transform: translateX(190px) translateY(20px) rotateY(0);
    -moz-transform: translateX(190px) translateY(20px) rotateY(0);
    -ms-transform: translateX(190px) translateY(20px) rotateY(0);
    -o-transform: translateX(190px) translateY(20px) rotateY(0);
    transform: translateX(190px) translateY(20px) rotateY(0);
  }
  50% {
    -webkit-transform: translateX(200px) translateY(10px) rotateY(180deg);
    -moz-transform: translateX(200px) translateY(10px) rotateY(180deg);
    -ms-transform: translateX(200px) translateY(10px) rotateY(180deg);
    -o-transform: translateX(200px) translateY(10px) rotateY(180deg);
    transform: translateX(200px) translateY(10px) rotateY(180deg);
  }
  95% {
    -webkit-transform: translateX(10px) translateY(10px) rotateY(180deg);
    -moz-transform: translateX(10px) translateY(10px) rotateY(180deg);
    -ms-transform: translateX(10px) translateY(10px) rotateY(180deg);
    -o-transform: translateX(10px) translateY(10px) rotateY(180deg);
    transform: translateX(10px) translateY(10px) rotateY(180deg);
  }
  100% {
    -webkit-transform: translateX(0) rotateY(0);
    -moz-transform: translateX(0) rotateY(0);
    -ms-transform: translateX(0) rotateY(0);
    -o-transform: translateX(0) rotateY(0);
    transform: translateX(0) rotateY(0);
  }
}
@-moz-keyframes ghost {
  0% {
    -webkit-transform: translateX(0) rotateY(0);
    -moz-transform: translateX(0) rotateY(0);
    -ms-transform: translateX(0) rotateY(0);
    -o-transform: translateX(0) rotateY(0);
    transform: translateX(0) rotateY(0);
  }
  45% {
    -webkit-transform: translateX(190px) translateY(20px) rotateY(0);
    -moz-transform: translateX(190px) translateY(20px) rotateY(0);
    -ms-transform: translateX(190px) translateY(20px) rotateY(0);
    -o-transform: translateX(190px) translateY(20px) rotateY(0);
    transform: translateX(190px) translateY(20px) rotateY(0);
  }
  50% {
    -webkit-transform: translateX(200px) translateY(10px) rotateY(180deg);
    -moz-transform: translateX(200px) translateY(10px) rotateY(180deg);
    -ms-transform: translateX(200px) translateY(10px) rotateY(180deg);
    -o-transform: translateX(200px) translateY(10px) rotateY(180deg);
    transform: translateX(200px) translateY(10px) rotateY(180deg);
  }
  95% {
    -webkit-transform: translateX(10px) translateY(10px) rotateY(180deg);
    -moz-transform: translateX(10px) translateY(10px) rotateY(180deg);
    -ms-transform: translateX(10px) translateY(10px) rotateY(180deg);
    -o-transform: translateX(10px) translateY(10px) rotateY(180deg);
    transform: translateX(10px) translateY(10px) rotateY(180deg);
  }
  100% {
    -webkit-transform: translateX(0) rotateY(0);
    -moz-transform: translateX(0) rotateY(0);
    -ms-transform: translateX(0) rotateY(0);
    -o-transform: translateX(0) rotateY(0);
    transform: translateX(0) rotateY(0);
  }
}
@keyframes ghost {
  0% {
    -webkit-transform: translateX(0) rotateY(0);
    -moz-transform: translateX(0) rotateY(0);
    -ms-transform: translateX(0) rotateY(0);
    -o-transform: translateX(0) rotateY(0);
    transform: translateX(0) rotateY(0);
  }
  45% {
    -webkit-transform: translateX(190px) translateY(20px) rotateY(0);
    -moz-transform: translateX(190px) translateY(20px) rotateY(0);
    -ms-transform: translateX(190px) translateY(20px) rotateY(0);
    -o-transform: translateX(190px) translateY(20px) rotateY(0);
    transform: translateX(190px) translateY(20px) rotateY(0);
  }
  50% {
    -webkit-transform: translateX(200px) translateY(10px) rotateY(180deg);
    -moz-transform: translateX(200px) translateY(10px) rotateY(180deg);
    -ms-transform: translateX(200px) translateY(10px) rotateY(180deg);
    -o-transform: translateX(200px) translateY(10px) rotateY(180deg);
    transform: translateX(200px) translateY(10px) rotateY(180deg);
  }
  95% {
    -webkit-transform: translateX(10px) translateY(10px) rotateY(180deg);
    -moz-transform: translateX(10px) translateY(10px) rotateY(180deg);
    -ms-transform: translateX(10px) translateY(10px) rotateY(180deg);
    -o-transform: translateX(10px) translateY(10px) rotateY(180deg);
    transform: translateX(10px) translateY(10px) rotateY(180deg);
  }
  100% {
    -webkit-transform: translateX(0) rotateY(0);
    -moz-transform: translateX(0) rotateY(0);
    -ms-transform: translateX(0) rotateY(0);
    -o-transform: translateX(0) rotateY(0);
    transform: translateX(0) rotateY(0);
  }
}
@-webkit-keyframes grave {
  0% {
    -webkit-transform: rotateZ(0);
    -moz-transform: rotateZ(0);
    -ms-transform: rotateZ(0);
    -o-transform: rotateZ(0);
    transform: rotateZ(0);
  }
  25% {
    -webkit-transform: rotateZ(10deg);
    -moz-transform: rotateZ(10deg);
    -ms-transform: rotateZ(10deg);
    -o-transform: rotateZ(10deg);
    transform: rotateZ(10deg);
  }
  50% {
    -webkit-transform: rotateZ(0);
    -moz-transform: rotateZ(0);
    -ms-transform: rotateZ(0);
    -o-transform: rotateZ(0);
    transform: rotateZ(0);
  }
  100% {
    -webkit-transform: rotateZ(0);
    -moz-transform: rotateZ(0);
    -ms-transform: rotateZ(0);
    -o-transform: rotateZ(0);
    transform: rotateZ(0);
  }
}
@-moz-keyframes grave {
  0% {
    -webkit-transform: rotateZ(0);
    -moz-transform: rotateZ(0);
    -ms-transform: rotateZ(0);
    -o-transform: rotateZ(0);
    transform: rotateZ(0);
  }
  25% {
    -webkit-transform: rotateZ(10deg);
    -moz-transform: rotateZ(10deg);
    -ms-transform: rotateZ(10deg);
    -o-transform: rotateZ(10deg);
    transform: rotateZ(10deg);
  }
  50% {
    -webkit-transform: rotateZ(0);
    -moz-transform: rotateZ(0);
    -ms-transform: rotateZ(0);
    -o-transform: rotateZ(0);
    transform: rotateZ(0);
  }
  100% {
    -webkit-transform: rotateZ(0);
    -moz-transform: rotateZ(0);
    -ms-transform: rotateZ(0);
    -o-transform: rotateZ(0);
    transform: rotateZ(0);
  }
}
@keyframes grave {
  0% {
    -webkit-transform: rotateZ(0);
    -moz-transform: rotateZ(0);
    -ms-transform: rotateZ(0);
    -o-transform: rotateZ(0);
    transform: rotateZ(0);
  }
  25% {
    -webkit-transform: rotateZ(10deg);
    -moz-transform: rotateZ(10deg);
    -ms-transform: rotateZ(10deg);
    -o-transform: rotateZ(10deg);
    transform: rotateZ(10deg);
  }
  50% {
    -webkit-transform: rotateZ(0);
    -moz-transform: rotateZ(0);
    -ms-transform: rotateZ(0);
    -o-transform: rotateZ(0);
    transform: rotateZ(0);
  }
  100% {
    -webkit-transform: rotateZ(0);
    -moz-transform: rotateZ(0);
    -ms-transform: rotateZ(0);
    -o-transform: rotateZ(0);
    transform: rotateZ(0);
  }
}
@-webkit-keyframes window {
  0% {
    background-color: #f6e833;
  }
  100% {
    background-color: #f0db90;
  }
}
@-moz-keyframes window {
  0% {
    background-color: #f6e833;
  }
  100% {
    background-color: #f0db90;
  }
}
@keyframes window {
  0% {
    background-color: #f6e833;
  }
  100% {
    background-color: #f0db90;
  }
}
@-webkit-keyframes bat {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
}
@-moz-keyframes bat {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
}
@keyframes bat {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
}
@-webkit-keyframes bat-right-wing {
  0% {
    -webkit-transform: rotateZ(0);
    -moz-transform: rotateZ(0);
    -ms-transform: rotateZ(0);
    -o-transform: rotateZ(0);
    transform: rotateZ(0);
  }
  100% {
    -webkit-transform: rotateZ(-20deg);
    -moz-transform: rotateZ(-20deg);
    -ms-transform: rotateZ(-20deg);
    -o-transform: rotateZ(-20deg);
    transform: rotateZ(-20deg);
  }
}
@-moz-keyframes bat-right-wing {
  0% {
    -webkit-transform: rotateZ(0);
    -moz-transform: rotateZ(0);
    -ms-transform: rotateZ(0);
    -o-transform: rotateZ(0);
    transform: rotateZ(0);
  }
  100% {
    -webkit-transform: rotateZ(-20deg);
    -moz-transform: rotateZ(-20deg);
    -ms-transform: rotateZ(-20deg);
    -o-transform: rotateZ(-20deg);
    transform: rotateZ(-20deg);
  }
}
@keyframes bat-right-wing {
  0% {
    -webkit-transform: rotateZ(0);
    -moz-transform: rotateZ(0);
    -ms-transform: rotateZ(0);
    -o-transform: rotateZ(0);
    transform: rotateZ(0);
  }
  100% {
    -webkit-transform: rotateZ(-20deg);
    -moz-transform: rotateZ(-20deg);
    -ms-transform: rotateZ(-20deg);
    -o-transform: rotateZ(-20deg);
    transform: rotateZ(-20deg);
  }
}
@-webkit-keyframes bat-left-wing {
  0% {
    -webkit-transform: rotateZ(0);
    -moz-transform: rotateZ(0);
    -ms-transform: rotateZ(0);
    -o-transform: rotateZ(0);
    transform: rotateZ(0);
  }
  100% {
    -webkit-transform: rotateZ(20deg);
    -moz-transform: rotateZ(20deg);
    -ms-transform: rotateZ(20deg);
    -o-transform: rotateZ(20deg);
    transform: rotateZ(20deg);
  }
}
@-moz-keyframes bat-left-wing {
  0% {
    -webkit-transform: rotateZ(0);
    -moz-transform: rotateZ(0);
    -ms-transform: rotateZ(0);
    -o-transform: rotateZ(0);
    transform: rotateZ(0);
  }
  100% {
    -webkit-transform: rotateZ(20deg);
    -moz-transform: rotateZ(20deg);
    -ms-transform: rotateZ(20deg);
    -o-transform: rotateZ(20deg);
    transform: rotateZ(20deg);
  }
}
@keyframes bat-left-wing {
  0% {
    -webkit-transform: rotateZ(0);
    -moz-transform: rotateZ(0);
    -ms-transform: rotateZ(0);
    -o-transform: rotateZ(0);
    transform: rotateZ(0);
  }
  100% {
    -webkit-transform: rotateZ(20deg);
    -moz-transform: rotateZ(20deg);
    -ms-transform: rotateZ(20deg);
    -o-transform: rotateZ(20deg);
    transform: rotateZ(20deg);
  }
}
html, body {
  width: 100%;
  height: 100%;
}

body {
  padding: 0;
  margin: 0;
  background: linear-gradient(180deg, #265a60, #665238) fixed;
  font-family: "Special Elite", cursive;
}

* {
  position: relative;
}
*:before, *:after {
  position: absolute;
  content: "";
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <div class="main-wrapper">
  <div class="error">
    <p class="error__num">4</p>
    <div class="error__moon"></div>
    <p class="error__num">4</p>
  </div>
  <div class="house">
    <div class="house__right">
      <div class="house__window"></div>
    </div>
    <div class="house__center">
      <div class="house__window"></div>
      <div class="house__window"></div>
    </div>
    <div class="house__left">
      <div class="house__window"></div>
      <div class="house__window"></div>
    </div>
    <div class="house__mini">
      <div class="house__window"></div>
      <div class="bridge"></div>
    </div>
    <div class="house__bottom">
      <div class="house__window"></div>
    </div>
  </div>
  <div class="graves">
    <div class="grave"></div>
    <div class="grave grave--mini"></div>
    <div class="grave grave--mini"></div>
  </div>
  <div class="bat bat--left">
    <div class="bat__right-wing"></div>
    <div class="bat__left-wing"></div>
  </div>
  <div class="bat bat--right">
    <div class="bat__right-wing"></div>
    <div class="bat__left-wing"></div>
  </div>
  <div class="ground-wrapper"></div>
  <div class="button-container">
    <p>Sorry! That page dosen't seem to exist</p>
    <button onclick="history.back()" class="button">Go back!</button>
    <a class="button button--back" href="">      
      <div class="ghost">
        <div class="ghost__hand"></div>
        <div class="ghost__face"></div>
        <div class="ghost__tail"></div>
      </div></a>
  </div>
</div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  
      <script id="rendered-js" >
// （｀・ω・´）
// No images, just CSS.
// Chrome recommended.
// twitter.com/study_dedede
//# sourceURL=pen.js
    </script>


</body>

</html>
 
