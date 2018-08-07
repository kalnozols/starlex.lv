(function (lib, img, cjs) {

var p; // shortcut to reference prototypes

// library properties:
lib.properties = {
	width: 50,
	height: 50,
	fps: 24,
	color: "#666666",
	manifest: []
};



// symbols:



(lib.Symbol1 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#00ADD5").s().p("AgBAuIiWhTIgCgDQAAAAAAgBQAAAAAAgBQAAAAAAgBQAAAAABgBIADgCQAAAAABAAQAAAAAAAAQABAAAAAAQABABAAAAICSBRICShRQABAAAAgBQABAAAAAAQABAAAAAAQABAAAAAAIADACIABAEIgDADIiVBTIgCABIgBgBg");

	this.addChild(this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-15.4,-4.7,30.9,9.5);


(lib.Symbol2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Symbol 1
	this.instance = new lib.Symbol1();
	this.instance.setTransform(0,-6.3);
	this.instance.alpha = 0;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(12).to({_off:false},0).to({alpha:0.84},6,cjs.Ease.get(1)).wait(1));

	// Symbol 1
	this.instance_1 = new lib.Symbol1();
	this.instance_1.setTransform(0,-6.3);
	this.instance_1.alpha = 0.84;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({alpha:1},2).to({alpha:0},7).wait(10));

	// Symbol 1
	this.instance_2 = new lib.Symbol1();
	this.instance_2.alpha = 0;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({alpha:1},7,cjs.Ease.get(1)).to({alpha:0},7,cjs.Ease.get(1)).wait(5));

	// Symbol 1
	this.instance_3 = new lib.Symbol1();
	this.instance_3.setTransform(0,6.3);
	this.instance_3.alpha = 0;
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(4).to({_off:false},0).to({alpha:1},7,cjs.Ease.get(1)).to({alpha:0},7,cjs.Ease.get(1)).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-15.4,-11,30.9,15.8);


// stage content:



(lib.down_anim = function() {
	this.initialize();

	// Layer 2
	this.instance = new lib.Symbol2();
	this.instance.setTransform(24.5,28);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(34.1,42,30.9,15.8);

})(lib = lib||{}, images = images||{}, createjs = createjs||{});
var lib, images, createjs;