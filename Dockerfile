# Python 3 basic image
FROM python:3.10-slim

# Set working directory
WORKDIR /app

# Copy requirements
COPY requirements.txt .

# Install requirements
RUN pip install --no-cache-dir -r requirements.txt

COPY . .

# Espose port to communicate
EXPOSE 5000

# Start up the app
CMD ["python", "app.py"]
