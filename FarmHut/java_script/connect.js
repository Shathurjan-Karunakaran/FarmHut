const inputs = document.querySelectorAll(".input");

function focusFunc {
	let parent = this.parentNode;
	parent.classList.add("focus")
}

function blueFunc(){
	let parent = this.parentNode;
	if(this.Value == ""){
		parent.classList.remove("focus");
	}

}

inputs.forEach((input) => {
	input.addEventListener("focus, focusFunc");
	input.addEventListener("blur, blurFunc");
});