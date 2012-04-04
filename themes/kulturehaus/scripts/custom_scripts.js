function wrapFirstWord (element) { 
    // Select only the first text node
    
   
    jQuery(element).each(function(i){
     console.log("element: ",i, " : ", element);
    var node = jQuery(this).contents(),

    // Get the text... 
        text = node.text(),
    // ... and the first word
   
   
        first = text.slice(0, text.indexOf(" "));
          
    
console.log("text: ", text);
 console.log("first: ", first);
console.log("node: ", node);
console.log(text.indexOf(" "));
    if (text.indexOf(" ") == "-1"){ //if there is no space in it don't do anything
        node[0].nodeValue = text;
        node.replaceWith('<em class="first_word">' + text + '</em>');
		}
		else{
    // Remove the first word from the text
    node[0].nodeValue = text.slice(first.length);
    // Add it back in with HTML around it
    node.before('<em class="first_word">' + first + '</em>');
			}
    
   });
};

jQuery(document).ready(function($){
wrapFirstWord('strong');

});

