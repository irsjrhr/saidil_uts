


var DOM = [
	{ id : "shandy", innerHTML : "" },
	{ id : "andi", innerHTML : "" },
	{ id : "ardi", innerHTML : "" },
]
var Document = {

	getELementById : function(id) {		
		var result;	
		for (var i = 0; i < DOM.length; i++) {
			var obj = DOM[i];
			if (obj.id == id) {
				result = obj;
				break;
			}
		}


		return result;
	}

};
document.getElementById('shandy').innerHTML = "";
Document.getElementById('shandy').innerHTML = "";
DOM[0].innerHTML = "";

