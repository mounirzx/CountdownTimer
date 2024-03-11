# Odometer Countdown

This project is a simple web application that displays a countdown timer using the Odometer library. It calculates the time remaining until a specified target date and updates the display in real-time.

## Features

- Countdown timer displayed in days, hours, minutes, and seconds.
- Uses AJAX to fetch the server time from the `hour.php` script.
- Updates the countdown timer every second.

## Demo 
screenshots:

![vCard Desktop Demo](./img/screen.gif"Desktop Demo")



## Usage

To use this project, follow these steps:

1. Clone the repository to your local machine:

 ```sh
   git clone https://github.com/your-username/odometer-countdown.git ```
```



2. Open the `index.html` file in a web browser.

3. The countdown timer will start automatically, displaying the time remaining until the target date.

## Configuration

You can customize the target date by modifying the `targetDate` variable in the `index.html` file. By default, it is set to `"2024-04-11"`.

## Server-Side Script

The `hour.php` script is used to fetch the server time. Make sure it is hosted on a server that allows cross-origin requests (CORS).

## Dependencies

- jQuery (v3.7.1)
- Odometer (v0.4.7)

## License

This project is licensed under the [MIT License](LICENSE).
