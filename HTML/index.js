const mouse$ = Rx.Observable
  .fromEvent(document.body, 'mousemove')
  .map(({ clientX, clientY }) => ({
    x: clientX - (window.innerWidth / 2),
    y: clientY - (window.innerHeight / 2)
  }));

const smoothMouse$ = RxCSS
  .animationFrame
  .withLatestFrom(mouse$, (f, m) => m)
  .scan(RxCSS.lerp(0.1));

RxCSS({
  mouse: smoothMouse$
});