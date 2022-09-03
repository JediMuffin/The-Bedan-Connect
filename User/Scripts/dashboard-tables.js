
      //CLICKABLE TABLE
        var table_tickets = document.getElementById('table-tickets');
        $("tr").click(function(){
    $(this).addClass("selected").siblings().removeClass("selected");
    });
       for (var i = 0; i < table.rows.length; i++){
            if(i!=0){
                 table.rows[i].onclick = function() 
            {
                this.uname = document.getElementById("offense").value = this.cells[0].innerHTML;
                this.uname = document.getElementById("deletekey").value = this.cells[0].innerHTML;
                this.name = document.getElementById("description").value = this.cells[1].innerHTML;
                this.role = document.getElementById("hint").value = this.cells[3].innerHTML;
               
                  if(typeof rIndex !== "undefined"){
                    table_tickets.rows[rIndex].classList.toggle("highlight");
                }
                rIndex = this.rowIndex;
                this.classList.toggle("highlight");
                //shorter form of code above, without textbox dependency. Just gets the values from the cells
                /*  this.name = this.cells[0].innerHTML;
                    this.age = this.cells[1].innerHTML;
                    this.country = this.cells[2].innerHTML;
                    alert(this.name + ", " + this.age + ", " + this.country);
                */
            }    
            }
          
        }
