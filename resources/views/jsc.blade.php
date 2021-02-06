Home / JavaScript DOM / JavaScript Checkbox
JavaScript Checkbox

Summary: in this tutorial, you will learn how to use JavaScript to check if a checkbox is checked, to get values of selected checkboxes, and select / unselect all checkboxes.
Checking if a checkbox is checked

To get the state of a checkbox, whether checked or unchecked, you follow these steps:

    First, select the checkbox using the selecting DOM methods such as getElementById() or querySelector().
    Then, access the checked property of the checkbox element. If its checked property is true, then the checkbox is checked; otherwise, it is not.

Suppose that you have a checkbox like this:

<input type="checkbox" id="accept"> Accept
Code language: HTML, XML (xml)

To check if the accept checkbox is checked, you use the following code:

const cb = document.getElementById('accept');
console.log(cb.checked);
Code language: JavaScript (javascript)

Additionally, you can use use the querySelector() to check if the :checked selector does not return null, like this:

document.querySelector('#accept:checked') !== null
Code language: JavaScript (javascript)

If a checkbox does not have the value attribute, its default value is 'on':

<input type="checkbox" id="accept">
Code language: HTML, XML (xml)

If you get the value attribute of a checkbox, you always get the 'on' string whether the checkbox is checked or not. For example:

const cb = document.getElementById('accept');
console.log(cb.value); // on
Code language: JavaScript (javascript)

See the following example:

<!DOCTYPE html>
<html>
<head>
    <title>JavaScript Checkbox</title>
</head>
<body>
    <form>
        <input type="checkbox" id="accept" checked> Accept
        <input type="button" id="btn" value="Submit">
    </form>
    <script>
        const cb = document.querySelector('#accept');
        const btn = document.querySelector('#btn');
        btn.onclick = () => {
            const result = cb.value;
            alert(result); // on
        };
    </script>
</body>
</html>