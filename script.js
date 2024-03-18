function message() {
  let name = document.getElementById("name").value;
  let message = document.getElementById("message").value;

  const webhook = "https://discord.com/api/webhooks/1139488628725256263/bknRiA1GbAMQOJ8yoq41ERnvCI1XAkoQR-tZWQ2MaqFfQtL3scb9Yw1fPEjCMZcamT6T";
  const contents = `Name: ${name}\nMessage: ${message}`;
  const request = new XMLHttpRequest();
  request.open("POST", webhook);
  request.setRequestHeader('Content-type', 'application/json');
  const params = {
    content: contents
  }
  request.send(JSON.stringify(params));
}