from flask import Flask, render_template, request, jsonify
import os
import sys

app = Flask(__name__)

@app.route("/")
def home():
    print(request.environ.get('HTTP_X_REAL_IP', request.remote_addr)  )
    return render_template('index.html')

@app.route("/Images")
def images():
    return render_template('images.html')

@app.route("/about-us")
def about():
    return render_template("about-us.html")


if __name__ == '__main__':
    app.run(debug=True)