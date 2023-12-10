-- Users Table
CREATE TABLE 'users' (
  Id INT AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(255) NOT NULL,
  lastname VARCHAR(255) NOT NULL,
  password_hash VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  role VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (firstname, lastname, password_hash, email, role) 
VALUES ('Dynamic', 'WebDev', '<hashed_password_here>', 'admin@project2.com', 'user');

-- Contacts Table
CREATE TABLE 'contacts' (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  firstname VARCHAR(255) NOT NULL,
  lastname VARCHAR(255) NOT NULL,
  email VARCHAR(255),
  telephone VARCHAR(255),
  company VARCHAR(255),
  type INTEGER,
  assigned_to INTEGER,
  created_by INTEGER,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME
);

-- Notes Table
CREATE TABLE 'notes' (
  id INT AUTO_INCREMENT PRIMARY KEY,
  contact_id INTEGER,
  comment TEXT,
  created_by INTEGER,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME,
  FOREIGN KEY (contact_id) REFERENCES Contacts(id)
);

 
