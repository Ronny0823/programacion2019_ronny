using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Github
{
    #region Usuario
    public class Usuario
    {
        #region Member Variables
        protected unknown _id;
        protected string _nombre;
        protected string _correo;
        protected string _username;
        protected string _PASSWORD;
        protected string _bio;
        protected unknown _creado_en;
        #endregion
        #region Constructors
        public Usuario() { }
        public Usuario(string nombre, string correo, string username, string PASSWORD, string bio, unknown creado_en)
        {
            this._nombre=nombre;
            this._correo=correo;
            this._username=username;
            this._PASSWORD=PASSWORD;
            this._bio=bio;
            this._creado_en=creado_en;
        }
        #endregion
        #region Public Properties
        public virtual unknown Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Nombre
        {
            get {return _nombre;}
            set {_nombre=value;}
        }
        public virtual string Correo
        {
            get {return _correo;}
            set {_correo=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual string PASSWORD
        {
            get {return _PASSWORD;}
            set {_PASSWORD=value;}
        }
        public virtual string Bio
        {
            get {return _bio;}
            set {_bio=value;}
        }
        public virtual unknown Creado_en
        {
            get {return _creado_en;}
            set {_creado_en=value;}
        }
        #endregion
    }
    #endregion
}