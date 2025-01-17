<?php
class Cliente
{
    private $pdo;

    public $id;
    public $dni;
    public $Nombre;
    public $Apellido;
    public $Correo;
    public $Telefono;
    public $Sexo;
    public $Direccion;
    public $Color;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Database::StartUp();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM cliente");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT * FROM cliente WHERE id = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try
        {
            $stm = $this->pdo->prepare("DELETE FROM cliente WHERE id = ?");
            $stm->execute(array($id));
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try
        {
            $sql = "UPDATE cliente SET
                    dni       = ?,
                    Nombre    = ?,
                    Apellido  = ?,
                    Correo    = ?,
                    Telefono  = ?,
                    Sexo      = ?,
                    Direccion = ?,
                    Color     = ?
                    WHERE id  = ?";

            $this->pdo->prepare($sql)->execute(
                array(
                    $data->dni,
                    $data->Nombre,
                    $data->Apellido,
                    $data->Correo,
                    $data->Telefono,
                    $data->Sexo,
                    $data->Direccion,
                    $data->Color,
                    $data->id
                )
            );
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar($data)
    {
        try
        {
            $sql = "INSERT INTO cliente (dni, Nombre, Apellido, Correo, Telefono, Sexo, Direccion, Color )
                    VALUES (?, ?, ?, ?, ? ,? ,? ,?)";

            $this->pdo->prepare($sql)->execute(
                array(
                    $data->dni,
                    $data->Nombre,
                    $data->Apellido,
                    $data->Correo,
                    $data->Telefono,
                    $data->Sexo,
                    $data->Direccion,
                    $data->Color
                )
            );
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
}
?>
