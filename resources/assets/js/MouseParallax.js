class MouseParallax {
    constructor(id, content, is_mouseX = true, is_mouseY = true, speed = 5) {
        this.parallaxBox = document.getElementById(content);
        this.el = document.getElementById(id);
        this.id = id;
        this.left = this.el.offsetLeft;
        this.top = this.el.offsetTop;
        this.is_mouseX = is_mouseX;
        this.is_mouseY = is_mouseY;
        this.speed = speed;
        this.mouseMove()

    }

    mouseMove() {
        const _self = this;
        this.parallaxBox.addEventListener('mousemove',function (event) {
            event = event || window.event;
            _self.mouseX = event.clientX - _self.parallaxBox.offsetLeft;
            _self.mouseY = event.clientY - _self.parallaxBox.offsetTop;
            _self.mouseParallaxMove();
        });
    }

    mouseParallaxMove() {
        const obj = this.el;
        const parentObj = obj.parentNode,
            containerWidth = parseInt(parentObj.offsetWidth),
            containerHeight = parseInt(parentObj.offsetHeight);

        if (this.is_mouseX) {
            obj.style.left = this.left - (((this.mouseX - (parseInt(obj.offsetWidth) / 2 + this.left)) / containerWidth) * this.speed) + 'px';
        }
        if (this.is_mouseY) {
            obj.style.top = this.top - (((this.mouseY - (parseInt(obj.offsetHeight) / 2 + this.top)) / containerHeight) * this.speed) + 'px';
        }

    }
}


export default MouseParallax;