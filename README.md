# Nexa Quanta PHP Developer test

AThis repository provides a Dockerized environment for running a Yii 1.1 project using Alpine Linux, Nginx, MySQL, and Adminer. The setup enables a quick and efficient way to deploy and manage legacy Yii applications.

---

## Features

- **Yii 1.1 Framework**: Easily run and test your legacy Yii projects.
- **PHP 5.3**: Compatible with Yii 1.1.
- **Nginx**: Lightweight web server.
- **MySQL**: Robust database support.
- **Adminer**: Simple web-based database management tool.

---

## Setup Instructions

### Prerequisites

Ensure you have the following installed:
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

---

### Steps to Run

1. **Clone the repository or extract the zip file**:
   ```bash
   git clone <repository_url>
   cd <repository_folder>
   ```


2. **Spin up containers**:
   ```bash
   docker-compose up -d
   ```

3. **Run migrations to setup DB**:

    ```bash
   docker exec -it yii-php /bin/ash
   ./protected/yiic migrate

   ```

4.  **Access the application**:

    Web Application: http://127.0.0.1:9999
    Adminer: http://127.0.0.1:8080


5.  **Default users**:

Username: admin / Password: admin
Username: user / Password: user