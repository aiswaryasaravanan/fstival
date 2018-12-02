   function addfields() 
		 {
		// var m1=parseInt(prompt("Enter number:","Enter"));
            // Number of inputs to create
            var number = 5;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("container");
			
            // Clear previous contents of the container
            while (container.hasChildNodes()) 
			{
                container.removeChild(container.lastChild);
            }
            for (var i=0;i<number;i++){
               var a=0;
                var input = document.createElement("input");
                input.type = "text";
				input.className="s2";
				input.value="";
                container.appendChild(input);
				var input1 = document.createElement("input");
	            input1.type = "button";
                input1.name = "btn"+ a++;
				input1.className="s3";
				input1.value="Result";
				input1.addEventListener("click", function(event)
                                 				{
                                                   $("#container").html("<table id='t1'>"+
												                               "<tr>"+ 
												                                   "<td id='td1'>cat 1</td>"+
																				   "<td id='td2'>43</td>"+
																				"</tr> "+
																				"<tr>"+ 
												                                   "<td id='td1'>Assignment 1</td>"+
																				   "<td id='td2'>10</td>"+
																				"</tr> "+
																				"<tr>"+ 
												                                   "<td id='td1'>cat 2</td>"+
																				   "<td id='td2'>40</td>"+
																				"</tr> "+
																				"<tr>"+ 
												                                   "<td id='td1'>Assignment 2</td>"+
																				   "<td id='td2'>10</td>"+
																				"</tr> "+
																				"<tr>"+ 
												                                   "<td id='td1'>cat 3</td>"+
																				   "<td id='td2'>45</td>"+
																				"</tr> "+
																				"<tr >"+
																				   "<td id='td1'>Assignment 3</td>"+ 
																				   "<td id='td2'>10</td>"+	 
																				"</tr>"+
																				"<tr>"+ 
												                                   "<td id='td1'>Average Cat Mark</td>"+
																				   "<td id='td2'>43</td>"+
																				"</tr> "+
																				"<tr>"+ 
												                                   "<td id='td1'>Semester Mark</td>"+
																				   "<td id='td2'>43</td>"+
																				"</tr> "+
																				"<tr style='background-color:rgba(0,102,255,0.1)'>"+ 
												                                   "<td id='td1'>Total Semester Mark</td>"+
																				   "<td id='td2'>86</td>"+
																				"</tr> "+
																		"</table>");
                                                    	 																	
                                                        
				                                }
				
				                        ) 
				container.appendChild(input1);
				
                container.appendChild(document.createElement("br"));
				
            }
			   
		 }
