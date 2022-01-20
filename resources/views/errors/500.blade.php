<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - 500 page status</title>
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:900" rel="stylesheet"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<main>
	<div id="wrap">
		<div class="hand hand-left">
			<span class='hand-part part-top'></span>
			<span class='hand-part part-middle'></span>
			<span class='hand-part part-bottom'></span>
		</div>
		<div class="hand hand-right">
			<span class='hand-part part-top'></span>
			<span class='hand-part part-middle'></span>
			<span class='hand-part part-bottom'></span>
		</div>
		<div class='line line-1'>
			<div class="ball">5</div>
		</div>
		<div class='line line-2'>
			<div class="ball">0</div>
		</div>
		<div class='line line-3'>
			<div class="ball">0</div>
		</div>
		<div id="server">
			<div class="eye eye-left"><span></span></div>
			<div class="eye eye-right"><span></span></div>
			<div class="block">
				<div class="light"></div>
			</div>
			<div class="block">
							<div class="light"></div>
			</div>
			<div class="block">
							<div class="light"></div>
			</div>
			<div class="block">
							<div class="light"></div>
			</div>
			<div class="block">
							<div class="light"></div>
			</div>
			<div id="bottom-block">
				<div class="bottom-line"></div>
				<div id="bottom-light"></div>
			</div>
		</div>	
	</div>
	
	<div id="code-error">
		<h1>Internal Server Error!</h1>
	</div>
	
</main>
<!-- partial -->
  
</body>
</html>
<style>
    :root {
  --block-background: #555;
  --block-border: 1px solid #000;
  --block-shadow: 0 0 0 2px rgba(255, 255, 255,0.2) inset;
  --block-light-background: linear-gradient(to right, #2579ba 0%,#0089f2 26%,#214db2 50%,#010023 51%,#0d0e19 100%);
  --block-light-border: 5px solid;
}

* {
  box-sizing: border-box;
}

main {
  width: 100vw;
  height: 100vh;
  min-height: 450px;
  background: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
main #wrap {
  width: 300px;
  height: 260px;
  display: flex;
  justify-content: center;
  align-items: flex-end;
  position: relative;
}
main #wrap .line {
  position: absolute;
  left: 0;
  top: 33%;
  width: 100%;
}
main #wrap .line.line-1 {
  animation: anim-line1 5s 0s ease forwards;
}
main #wrap .line.line-1 .ball {
  animation-delay: 0;
}
main #wrap .line.line-2 {
  animation: anim-line2 5s 1.2s ease forwards;
}
main #wrap .line.line-2 .ball {
  animation-delay: 1.2s;
}
main #wrap .line.line-3 {
  animation: anim-line3 5s 2.4s ease forwards;
}
main #wrap .line.line-3 .ball {
  animation-delay: 2.4s;
}
main #wrap .ball {
  height: 40px;
  width: 40px;
  border-radius: 50%;
  background: #000;
  color: #fff;
  text-align: center;
  line-height: 40px;
  font-size: 30px;
  font-weight: bold;
  font-family: "Source Code Pro", monospace;
  z-index: 2;
  animation: anim-ball 5s ease forwards;
}
main #wrap .hand {
  position: absolute;
  top: 50%;
  width: 100%;
  transform-origin: 50% 0;
}
main #wrap .hand.hand-left {
  left: 6px;
  animation: anim-hand-left 5s 0s ease forwards;
}
main #wrap .hand .hand-part {
  height: 2px;
  width: 30px;
  background: #000;
  position: absolute;
}
main #wrap .hand .hand-part.part-bottom {
  top: -10px;
  left: 0;
  height: 20px;
  border-radius: 7px;
  background: #ccc;
  border-bottom: 4px solid #000;
}
main #wrap .hand .hand-part.part-middle {
  left: 26px;
  top: -10px;
  transform: rotate(-40deg);
}
main #wrap .hand .hand-part.part-top {
  left: 45px;
  top: -32px;
  transform: rotate(-60deg);
}
main #wrap .hand.hand-right {
  right: 6px;
  animation: anim-hand-left 5s 0.5s ease forwards;
}
main #wrap .hand.hand-right .part-bottom {
  left: auto;
  right: 0;
}
main #wrap .hand.hand-right .part-middle {
  left: auto;
  right: 26px;
  transform: rotate(40deg);
}
main #wrap .hand.hand-right .part-top {
  left: auto;
  right: 45px;
  transform: rotate(60deg);
}
main #server {
  width: 150px;
  height: 250px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  border: 3px solid #1C1000;
  padding-bottom: 2%;
  background: #1C1000;
  position: relative;
}
main #server .eye {
  position: absolute;
  top: -12px;
  width: 20px;
  height: 25px;
  border: 1px solid #000;
  box-shadow: 0 0 0 2px #ccc;
  background: #fff;
  border-radius: 50%;
}
main #server .eye span {
  display: block;
  width: 50%;
  height: 50%;
  border: 1px solid;
  border-radius: 50%;
  background: #000;
  position: absolute;
  left: 0;
  top: 1px;
  animation: anim-eyes 8s ease forwards;
}
main #server .eye.eye-left {
  left: 30px;
}
main #server .eye.eye-right {
  right: 30px;
}
main #server .block {
  border: var(--block-border);
  height: 11%;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: var(--block-shadow);
  background: var(--block-background);
}
main #server .block .light {
  width: calc(100% - 4px);
  height: 12px;
  border-bottom: var(--block-light-border);
  background: var(--block-light-background);
}
main #server #bottom-block {
  height: 30%;
  border: var(--block-border);
  display: flex;
  justify-content: center;
  align-items: center;
  background: var(--block-background);
  box-shadow: var(--block-shadow);
  overflow: hidden;
  position: relative;
}
main #server #bottom-block #bottom-light {
  width: 2vw;
  height: 2vw;
  min-width: 14px;
  min-height: 14px;
  border-radius: 4px;
  background: #fff;
  border: 2px solid #ccc;
  box-shadow: var(--block-shadow);
  z-index: 2;
}
main #server #bottom-block .bottom-line {
  width: calc(100% - 4px);
  height: 3px;
  background: #fff;
  position: absolute;
  border-bottom: 2px solid #ccc;
}
main #code-error {
  width: 60%;
  min-width: 320px;
  text-align: center;
}
main #code-error h1 {
  font-family: "Source Code Pro", monospace;
  font-size: 4vw;
  font-weight: bold;
  margin: 1vw 0;
}

@keyframes anim-ball {
  20% {
    transform: rotate(180deg);
  }
  40% {
    transform: rotate(0deg);
  }
  60% {
    transform: rotate(180deg);
  }
  80% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(-90deg);
  }
}
@keyframes anim-line1 {
  20% {
    transform: rotate(180deg);
  }
  40% {
    transform: rotate(0deg);
  }
  60% {
    transform: rotate(180deg);
  }
  80% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(90deg) translateY(40px);
  }
}
@keyframes anim-line2 {
  20% {
    transform: rotate(180deg);
  }
  40% {
    transform: rotate(0deg);
  }
  60% {
    transform: rotate(180deg);
  }
  80% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(90deg);
  }
}
@keyframes anim-line3 {
  20% {
    transform: rotate(180deg);
  }
  40% {
    transform: rotate(0deg);
  }
  60% {
    transform: rotate(180deg);
  }
  80% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(90deg) translateY(-40px);
  }
}
@keyframes anim-hand-left {
  10% {
    transform: rotate(3deg);
  }
  15% {
    transform: rotate(0deg);
  }
  25% {
    transform: rotate(3deg);
  }
  30% {
    transform: rotate(0deg);
  }
  40% {
    transform: rotate(3deg);
  }
  45% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(3deg);
  }
  55% {
    transform: rotate(0deg);
  }
  65% {
    transform: rotate(3deg);
  }
  70% {
    transform: rotate(0deg);
  }
  80% {
    transform: rotate(3deg);
  }
  85% {
    transform: rotate(0deg);
  }
  95% {
    transform: rotate(3deg);
  }
  100% {
    transform: rotate(0deg);
  }
}
@keyframes anim-hand-right {
  10% {
    transform: rotate(-3deg);
  }
  15% {
    transform: rotate(0deg);
  }
  25% {
    transform: rotate(-3deg);
  }
  30% {
    transform: rotate(0deg);
  }
  40% {
    transform: rotate(-3deg);
  }
  45% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(-3deg);
  }
  55% {
    transform: rotate(0deg);
  }
  65% {
    transform: rotate(-3deg);
  }
  70% {
    transform: rotate(0deg);
  }
  80% {
    transform: rotate(-3deg);
  }
  85% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(0deg);
  }
}
@keyframes anim-eyes {
  25% {
    left: 10px;
  }
  50% {
    left: 0;
  }
  75% {
    top: 0;
    left: 10px;
  }
  100% {
    top: 7px;
    left: 5px;
  }
}
</style>