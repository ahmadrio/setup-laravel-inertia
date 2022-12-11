export default function Home(props) {
  console.log(props);

  return (
    <div>
      <h1>Nama: {props.name}</h1>
      <h1>Company: {props.company}</h1>
    </div>
  );
}
