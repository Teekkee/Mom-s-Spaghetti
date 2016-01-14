			var Calculator = function() {
			    var bone;
			    var andR;
			    var Action;

			    this.getOperand1 = function() {
			        return bone;
			    }
			    this.getOperand2 = function() {
			        return andR;
			    }
			    this.getAction = function() {
			        return Action;
			    }


			    this.setOperand1 = function() {
			        bone = document.getElementById("operand1Value").value;
			    }
			    this.setOperand2 = function() {
			        andR = document.getElementById("operand2Value").value;
			    }
			    this.setAction = function() {
			        var n = document.getElementById("action").options.selectedIndex;
			        Action = parseInt(document.getElementById("action").options[n].value);
			    }
			    this.Addition = function() {
			        andR = parseInt(andR);
			        bone = parseInt(bone);
			        return parseInt(andR + bone);
			    }
			    this.Subtraction = function() {
			        andR = parseInt(andR);
			        bone = parseInt(bone);
			        return parseInt(bone - andR);
			    }
			    this.Multiplication = function() {
			        andR = parseInt(andR);
			        bone = parseInt(bone);
			        return parseInt(bone * andR);
			    }
			    this.Division = function() {
			        andR = parseInt(andR);
			        bone = parseInt(bone);
			        if (andR == 0) {
			            return "Error: Division by 0."
			        } else {
			            return bone / andR;
			        }
			    }
			    this.doAction = function() {
			        var result;
			        switch (Action) {
			            case 1:
			                result = this.Addition()
			                break
			            case 2:
			                result = this.Subtraction()
			                break
			            case 3:
			                result = this.Multiplication()
			                break
			            case 4:
			                result = this.Division()
			                break
			            default:
			                result = "Please, choose the action."
			        };
			        return result;
			    };
			    this.calc = function() {
			        this.setOperand1();
			        this.setOperand2();
			        this.setAction();
			        document.getElementById("result").innerHTML = simpleCalc.doAction();

			    };
			}
			var simpleCalc = new Calculator();
