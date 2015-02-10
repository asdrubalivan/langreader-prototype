echo "Do you wish to migrate the database?"
select yn in "Yes" "No"; do
    case $yn in
        Yes ) 
            echo "Migrating";
            php yii migrate/up --migrationPath=@vendor/dektrium/yii2-user/migrations || { echo "User migration failed"; exit 1; }
            php yii migrate/up || { echo "Other migrations failed"; exit 1; }
            break;;
        No ) exit;;
    esac
done
