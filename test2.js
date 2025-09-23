process.stdin.setEncoding('utf8');
process.stdin.on('readable', function() {
    var input = process.stdin.read();
    if (input !== null) {
// Эхо-вывод текста

        var command = input.trim();
       // console.log(command);
        if (command == "exit"){
            console.log("Exiting");
            process.exit();
        }
        else {
            process.stdout.write(input);
            process.stdout.write("попа жопа");
        }

    }
});