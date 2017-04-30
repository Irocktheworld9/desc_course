            $(document).ready(function(){
                $("#Add1").click(function(){
                    // After clicking ADD button, these textboxes will appear with a SAVE button.-->
                    $("#row1").append("<input type='text' id='deg1' class='degree' placeholder='Degree' pattern='^[a-zA-Z\s]+$'>");
                    $("#row1").append("<input type='text' id='ses1' class='session' placeholder='Session' pattern='[0-9\-]'>");
                    $("#row1").append("<input type='text' id='uni1' class='university' placeholder='University' pattern='[a-zA-Z\s]'>");
                    $("#row1").append("<button class='save' id='save1'>Save</button>");
                    $("#Add1").hide();//This button is hidden till the SAVE button is fired to store the data in database.-->
                });
                $("#Add2").click(function(){
                    // After clicking ADD button, these textboxes will appear with a SAVE button.-->
                    $("#row2").append("<input type='text' id='deg2' class='degree' placeholder='Degree' pattern='[a-zA-Z\s]'>");
                    $("#row2").append("<input type='text' id='ses2' class='session' placeholder='Session' pattern='[0-9\-]'>");
                    $("#row2").append("<input type='text' id='uni2' class='university' placeholder='University' pattern='[a-zA-Z\s]'>");
                    $("#row2").append("<button class='save' id='save2'>Save</button>");
                    $("#Add2").hide();//This button is hidden till the SAVE button is fired to store the data in database.-->
                });
                $("#Add3").click(function(){
                    // After clicking ADD button, these textboxes will appear with a SAVE button.-->
                    $("#row3").append("<input type='text' id='deg3' class='degree' placeholder='Degree' pattern='[a-zA-Z\s]'>");
                    $("#row3").append("<input type='text' id='ses3' class='session' placeholder='Session' pattern='[0-9\-]'>");
                    $("#row3").append("<input type='text' id='uni3' class='university' placeholder='University' pattern='[a-zA-Z\s]'>");
                    $("#row3").append("<button class='save' id='save3'>Save</button>");
                    $("#Add3").hide();//This button is hidden till the SAVE button is fired to store the data in database.-->
                });
                $("#Add4").click(function(){
                    //After clicking ADD button, these textboxes will appear with a SAVE button.-->
                    $("#row4").append("<input type='text' id='deg4' class='degree' placeholder='Degree' pattern='[a-zA-Z\s]'>");
                    $("#row4").append("<input type='text' id='ses4' class='session' placeholder='Session' pattern='[0-9\-]'>");
                    $("#row4").append("<input type='text' id='uni4' class='university' placeholder='University' pattern='[a-zA-Z\s]'>");
                    $("#row4").append("<button class='save' id='save4'>Save</button>");
                    $("#Add4").hide();//This button is hidden till the SAVE button is fired to store the data in database.-->
                });
                $(document).on("click","#save1",function(){
                    $("#deg1").remove();
                    $("#ses1").remove();
                    $("#uni1").remove();
                    $("#save1").remove();
                    $("#Add1").show();
                });
                $(document).on("click","#save2",function(){
                    $("#deg2").remove();
                    $("#ses2").remove();
                    $("#uni2").remove();
                    $("#save2").remove();
                    $("#Add2").show();
                });
                $(document).on("click","#save3",function(){
                    $("#deg3").remove();
                    $("#ses3").remove();
                    $("#uni3").remove();
                    $("#save3").remove();
                    $("#Add3").show();
                });
                $(document).on("click","#save4",function(){
                    $("#deg4").remove();
                    $("#ses4").remove();
                    $("#uni4").remove();
                    $("#save4").remove();
                    $("#Add4").show();
                });
                $(document).on("blur",".degree",function(){
                    if(this.value==""){
                        alert("Fill this up.");
												return;
                    }pattern='^[a-zA-Z\s]+$';
                    check = this.value.match(pattern);
                    if(!check)
                        alert("Invalid Characters Used.");
                });
								$(document).on("blur",".university",function(){
                    if(this.value==""){
                        alert("Fill this up.");
												return;
                    }pattern='^[a-zA-Z\s]+$';
                    check = this.value.match(pattern);
                    if(!check)
                        alert("Invalid Characters Used.");
                });
								$(document).on("blur",".session",function(){
                    if(this.value==""){
                        alert("Fill this up.");
												return;
										}pattern='^[0-9]{4}\-[0-9]{4}$';
                    check = this.value.match(pattern);
                    if(!check)
                        alert("Invalid Characters Used.");
                });
            });
