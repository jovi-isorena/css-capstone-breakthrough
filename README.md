# Installation Guide:

1. Open cmd
2. Run in terminal
   - *`git clone https://github.com/jovi-isorena/css-capstone-breakthrough.git`*
3. Open the cloned repo in VS Code.
4. Switch to development branch. Run in terminal.
   - *`git checkout development`*
5. Run in terminal.
   - *`composer install`*
6. Run in terminal.
   - *`npm install`*
7. Copy-paste the *.env.example* file and rename the new file *.env*
8. Make sure the DB_DATABASE is set to *db_breakthrough*
9.  Run in terminal. 
    - *`php artisan key:generate`*
10. Run on terminal.
    - *`npm run build`*
11. Create a database with name *db_breakthrough*
12. Run on terminal.
    - *`php artisan migrate`*
13. Run on  terminal.
14. - *`php artisan serve`*
15. Open browser and go to *localhost:8000*