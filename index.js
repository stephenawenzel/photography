// practice JS
    console.log('This is the .JS template with notes on coding.');

    // cannot be a reserved keyword - can find a list online - gives error
    // names should be meaningful!
    // names cannot start with a number - goes back to second rule.
    // names cannot contain a space or hyphen (-)
    
    // use camelNotation
    let firstName = 'Stephen'; // String Literal
    let age = 24 // Number Literal
    let isApproved = true; // Boolean Literal
    let lastName = 'Wenzel';
    let what = undefined; // Explicitly undefined
    let selectedVariable = null; // for explicitly clearing a variable's value
    console.log(firstName);
    console.log(lastName);

    // If you need to reassign a variable, use let. If not, use const.
    const variableNumber = 0.3;
    console.log(variableNumber);

    let interestRate = 0.3;
    interestRate = 1;
    console.log(interestRate);

    let person = {
        name: 'Stephen',
        age: 24
    }
    // Dot Notation - more concise, so default
    person.name = 'Wenzel';

    // Bracket Notation - good for run time. Stick to Dot.
    let selection = 'name';
    person['selection'] = 'Larry';

    console.log(person.name);

    // Arrays - the lengths and object types can change at run time
    // Arrays are a data structure used to reference a list of items
    let selectedColors = ['this', 'that']; // array literal: []
    selectedColors[2] = '3';
    console.log(selectedColors.length);

    // Functions - a set of statemnets that performs a task or calculates a value

    // Performing a Task
    // parameters are only meaningful inside the function
    function greet(name, lastName) {
        console.log('Hello ' + name + ' ' + lastName);
    }

    greet('John', 'Smith');
    greet('Mary');
    // John is an argument to the great function - the actual value!

    // Calculating a value
    function square(number) {
        return number * number;
    }

    console.log(square(2));

// Copyright notice when clicking image
    function popupMsg(theMsg) {
    alert(theMsg);
    }