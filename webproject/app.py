from flask import Flask, request, render_template, redirect, url_for, flash

app = Flask(__name__)
app.secret_key = 'your_secret_key'  # Required for flash messages

# Dummy database (for demonstration purposes)
users = {}

@app.route('/')
def home():
    return render_template('signup.html')  # Ensure signup.html matches your HTML file name

@app.route('/signup', methods=['POST'])
def signup():
    email = request.form['email']
    password = request.form['password']
    confirm_password = request.form['confirm_password']

    # Validation logic
    if not email or not password or not confirm_password:
        flash("All fields are required!")
        return redirect(url_for('home'))

    if password != confirm_password:
        flash("Passwords do not match!")
        return redirect(url_for('home'))

    # Save user to "database"
    if email in users:
        flash("Email is already registered!")
    else:
        users[email] = password
        flash("Signup successful! You can now login.")

    return redirect(url_for('home'))

if __name__ == '__main__':
    app.run(debug=True)
