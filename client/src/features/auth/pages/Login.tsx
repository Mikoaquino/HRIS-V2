import { FC } from "react";
import { FaGoogle, FaFacebookF, FaTwitter, FaLinkedinIn, FaInstagram } from "react-icons/fa";

const LoginPage: FC = () => {
  return (
    <div className="flex items-center justify-center min-h-screen bg-teal-400">
      <div className="bg-white p-10 rounded-lg shadow-lg w-full max-w-xl">
        <div className="text-center mb-6">
          <div className="flex items-center justify-center gap-2 text-teal-500 text-xl font-semibold">
            <span className="text-3xl">🌀</span>
            <h2>Get Started</h2>
          </div>
          <p className="text-gray-500">Sign up as an employee.</p>
        </div>

        <div className="flex flex-col gap-3 mb-4">
          <button className="flex items-center justify-center gap-2 border border-gray-400 py-2 rounded-md hover:bg-gray-100">
            <FaGoogle />
            Continue with Google
          </button>
          <button className="flex items-center justify-center gap-2 border border-gray-400 py-2 rounded-md hover:bg-gray-100">
            <FaFacebookF />
            Continue with Facebook
          </button>
        </div>

        <div className="flex items-center my-4">
          <hr className="flex-grow border-gray-300" />
          <span className="mx-2 text-sm text-gray-500">or</span>
          <hr className="flex-grow border-gray-300" />
        </div>

        <form className="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label className="text-sm font-medium">First Name</label>
            <input type="text" placeholder="Enter your first name" className="w-full mt-1 border px-3 py-2 rounded-md" />
          </div>
          <div>
            <label className="text-sm font-medium">Last Name</label>
            <input type="text" placeholder="Enter your last name" className="w-full mt-1 border px-3 py-2 rounded-md" />
          </div>
          <div>
            <label className="text-sm font-medium">Email</label>
            <input type="email" placeholder="Enter your email" className="w-full mt-1 border px-3 py-2 rounded-md" />
          </div>
          <div>
            <label className="text-sm font-medium">Password</label>
            <input type="password" placeholder="Enter your password" className="w-full mt-1 border px-3 py-2 rounded-md" />
          </div>
        </form>

        <button className="w-full mt-6 bg-teal-400 text-white py-2 rounded-md hover:bg-teal-500 transition">
          Create Account
        </button>

        <div className="flex justify-center gap-6 mt-6 text-teal-400">
          <FaTwitter />
          <FaFacebookF />
          <FaLinkedinIn />
          <FaInstagram />
        </div>

        <p className="text-center mt-4 text-sm text-gray-600">
          Already have an account? <span className="text-black font-medium cursor-pointer">Sign In</span>
        </p>
      </div>
    </div>
  );
};

export default LoginPage;
