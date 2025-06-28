# Docker Example Project

This is a simple example project demonstrating how to use Docker and Docker Compose to run a PHP application connected to a MySQL database.

## Project Structure

- `Dockerfile`: Defines the PHP application image.
- `docker-compose.yml`: Defines and runs multi-container Docker applications (PHP app + MySQL).
- `index.php`: Simple PHP program that creates a table and adds dummy records to it.

## Requirements

- Docker installed
- Docker Compose installed

## How to run

1. Build and start the containers:

   ```bash
   docker compose up --build
   ```

2. Then open your browser to:

   ```
   http://localhost:8000
   ```

3. You should see that the app connected successfully to the DB, and displays the list of records ("users").

## Notes

- Volumes are used to persist MySQL data between container restarts.
- The PHP container runs an interactive shell by default.
- The MySQL root password is empty for this example.

## License

This project is licensed under the MIT License.
