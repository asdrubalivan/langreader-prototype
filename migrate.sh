echo "What do you want to do"
select yn in "Migrate Up" "Migrate Down" "Exit"; do
    case $yn in
        "Migrate Up" ) 
            echo "Migrating";
            php yii migrate/up --migrationPath=@vendor/dektrium/yii2-user/migrations || { echo "User migration failed"; exit 1; }
            php yii migrate/up || { echo "Other migrations failed"; exit 1; }
            break;;
        "Migrate Down" )
            echo "Migrating down";
            php yii migrate/down || { echo "Migrate down failed"; exit 1;}
            break;;
        "Exit" ) exit;;
    esac
done
